<?php
/**
* @package AccelerateMedia
* @subpackage Accelerate
*/

/**
Register the Sidebars
*/
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Page Sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => 'Post Sidebar',						   
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => 'Blog Sidebar',						   
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => 'Default Sidebar',						   
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}
/**
	End Registering the Sidebars
*/



/****************************************************************
	Add area to the page section to choose which sidebar to use
****************************************************************/

/* Use the admin_menu action to define the custom boxes */
add_action('admin_menu', 'choose_sidebar');

/* Use the save_post action to do something with the data entered */
add_action('save_post', 'choose_sidebar_save_postdata');

/* Adds a custom section to the "advanced" Post and Page edit screens */
function choose_sidebar() {
	add_meta_box( 'choose_sidebar_sectionid', __( 'Which Sidebar?', 'choose_sidebar_textdomain' ), 
	            'choose_sidebar_inner_custom_box', 'post', 'side' );
	add_meta_box( 'choose_sidebar_sectionid', __( 'Which Sidebar?', 'choose_sidebar_textdomain' ), 
	            'choose_sidebar_inner_custom_box', 'page', 'side' );
}
   
/* Prints the inner fields for the custom post/page section */
function choose_sidebar_inner_custom_box( $post ) {
	global $wp_registered_sidebars;

  // Use nonce for verification

  echo '<input type="hidden" name="choose_sidebar_noncename" id="choose_sidebar_noncename" value="' . 
    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

  // The actual fields for data entry
  echo '<p>' . __("Which sidebar should be used?", 'choose_sidebar_textdomain' ) . '</p> ';
  
  // --- Get the current sidebar selection so we can make sure its correctly selected
  $sidebar_value = get_post_meta($post->ID, 'sidebar', true);

  echo '<select name="which_sidebar">';
  echo '<option value="">Choose a Sidebar</option>';
  foreach($wp_registered_sidebars as $sidebar){
	  echo '<option value="'.$sidebar['name'].'"';
	  if($sidebar_value == $sidebar['name']){
		echo ' selected="selected" ';
	  }
	  echo '>'.$sidebar['name'].'</option>';
	  
  }
  echo '</select>';
}


/* When the post is saved, saves our custom data */
function choose_sidebar_save_postdata( $post_id ) {

  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times

  if ( isset($_POST['choose_sidebar_noncename']) && !wp_verify_nonce( $_POST['choose_sidebar_noncename'], plugin_basename(__FILE__) )) {
    return $post_id;
  }

  if ( isset($_POST['post_type']) && $_POST['post_type'] == 'page' ) {
    if ( !current_user_can( 'edit_page', $post_id ))
      return $post_id;
  } else {
    if ( !current_user_can( 'edit_post', $post_id ))
      return $post_id;
  }

  // OK, we're authenticated: we need to find and save the data

  $mydata = isset($_POST['which_sidebar']) ? $_POST['which_sidebar'] : '';
	
	if($mydata != -1){
   		update_post_meta($post_id, 'sidebar', $mydata);
	}
   

   return $mydata;
}

function sidebar_details(){
	global $post;
	$sidebar = array();
	$sidebar['name'] = get_post_meta($post->ID, 'sidebar', true); 
	if(!$sidebar['name']){
		if(is_page($post->ID)){
			$sidebar['name'] = 'Page Sidebar'; 
		} if(is_single($post->ID) || is_home($post->ID)){
			$sidebar['name'] = 'Blog Sidebar';
		} else {
			$sidebar['name'] = 'Default Sidebar';
		}
	}
	// --- Change sidebar name so that we can use the proper CSS to style it
	$sidebar['id'] = strtolower(str_replace(' ', '_', $sidebar['name']));
	return $sidebar;
}
/******************************************************************
	End creating area and code for choosing which sidebar to use
*******************************************************************/



/*************************************************
	Create a custom post type for our delicous beers!
****************************************************************/

add_action('init', 'register_brews');
function register_brews(){
  $labels = array(
    'name' => _x('Brews', 'post type general name'),
    'singular_name' => _x('Brew', 'post type singular name'),
	'add_new' => _x( 'Add New', 'add' ),
	'add_new_item' => __( 'Add New Brew' ),
	'edit_item' => __( 'Edit Brew' ),
	'new_item' => __( 'New Brew' ),
	'view_item' => __( 'View Brew' ),
	'search_items' => __( 'Search Brews' ),
	'not_found' =>  __( 'No Brew Found' ),
	'not_found_in_trash' => __( 'No Brew Found in trash' ),
	'parent_item_colon' => ''    
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => true,
	'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'excerpt','comments'),
    'menu_position' => 20,
	'register_meta_box_cb' => 'add_brew_metaboxes',
	'taxonomies' => array('hops')
  ); 
  register_post_type('brew',$args);
}
// --- add the meta box for the abv to the brews
function add_brew_metaboxes() {
    add_meta_box('brew_meta', 'Alcohol by volume', 'brew_meta_html', 'brew', 'advanced', 'high');
}

// --- Put form html into the abv meta box
function brew_meta_html() {
    global $post;
 
    // Noncename needed to verify where the data originated
    echo '<input type="hidden" name="meta_noncename" id="meta_noncename" value="' .
    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
 
    // Get the abv data if its already been entered
    $abv = get_post_meta($post->ID, '_abv', true);
 
    // Echo out the field
    echo '<input type="text" name="_abv" value="' . $abv  . '" class="widefat" placeholder="e.g. &ldquo;7.5&rdquo;" />';

}


add_action('save_post', 'save_brew_meta', 1, 2); // save the custom fields
// Save the abv 
function save_brew_meta($post_id, $post) {
 
    // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times
    if ( !wp_verify_nonce( $_POST['abvmeta_noncename'], plugin_basename(__FILE__) )) {
		return $post->ID;
    }
 
    // Is the user allowed to edit the post or page?
    if ( !current_user_can( 'edit_post', $post->ID )){
        return $post->ID;
	}
 
    // OK, we're authenticated: we need to find and save the data
    // We'll put it into an array to make it easier to loop though.
    $brew_meta['_abv'] = $_POST['_abv'];
 
    // Add abv value as a custom field
    foreach ($brew_meta as $key => $value) { // Cycle through the $events_meta array!
        if( $post->post_type == 'revision' ) return; // Don't store custom data twice
        $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
        if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
            update_post_meta($post->ID, $key, $value);
        } else { // If the custom field doesn't have a value
            add_post_meta($post->ID, $key, $value);
        }
        if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
    }
 
}


function add_sb_taxonomies() {
    // Add new "Locations" taxonomy to Posts
    register_taxonomy('hops', 'brew', array(
        'labels' => array(
            'name' => _x( 'Hops', 'taxonomy general name' ),
            'singular_name' => _x( 'Hop', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Hops' ),
            'all_items' => __( 'All Hops' ),
            'edit_item' => __( 'Edit Hop' ),
            'update_item' => __( 'Update Hop' ),
            'add_new_item' => __( 'Add New Hop' ),
            'new_item_name' => __( 'New Hop Name' ),
            'menu_name' => __( 'Hops' ),
        ),
    ));
}
add_action( 'init', 'add_sb_taxonomies', 0 );

/******************************************************************
	Start support having post thumbnails for your post images
*******************************************************************/
if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
    add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
	add_theme_support( 'automatic-feed-links' );
}

/******************************************************************
	Add excerpt support for pages for meta desc if empty
*******************************************************************/
add_post_type_support('page', 'excerpt');

/******************************************************************
	Add a menu to the top navigation area
*******************************************************************/
function register_menus() {
  register_nav_menus(array( 'header-menu' => __( 'Header Menu' )));
}
add_action( 'init', 'register_menus' );

// --- Fallback in case the menu in our theme doesn't exist yet
function menu_fallback(){
	$listpages = wp_list_pages("sort_column=menu_order&depth=2&title_li=&echo=0");
	$linktextpattern = '/\<a (.*?)\>(.*?)\<\/a\>/';
	$replacement = '<a $1><span>$2</span></a>';
	$navhtml = preg_replace ($linktextpattern, $replacement, $listpages);
	echo $navhtml;
}

/******************************************************************
	Meta Data for SEO
*******************************************************************/
add_action('add_meta_boxes', 'add_seo_metaboxes');
function add_seo_metaboxes() {
    add_meta_box('seo_meta_tags', 'Meta Data', 'seo_meta_html', 'page', 'normal');
}

function seo_meta_html() {
    global $post;
 
    echo '<input type="hidden" name="seometa_noncename" id="seometa_noncename" value="' .
    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
 
    $seo_title = get_post_meta($post->ID, '_seo_title', true);
    $seo_meta_desc = get_post_meta($post->ID, '_seo_meta_desc', true);
 
    echo '<label for="_seo_title">Page Title</label><input type="text" name="_seo_title" id="_seo_title" value="' . $seo_title  . '" class="widefat" />';
    echo '<label for="_seo_desc">Meta Description</label><textarea name="_seo_meta_desc" id="_seo_meta_desc" class="widefat" >'. $seo_meta_desc  .'</textarea>';
}

add_action('save_post', 'save_seo_meta', 1, 2);
function save_seo_meta($post_id, $post) {
    if ( isset($_POST['seometa_noncename']) && !wp_verify_nonce( $_POST['seometa_noncename'], plugin_basename(__FILE__) )) {
		return $post->ID;
    }
 
    if ( !current_user_can( 'edit_post', $post->ID )){
        return $post->ID;
	}
 
    $cta_meta['_seo_title'] = isset($_POST['_seo_title']) ? $_POST['_seo_title'] : '';
    $cta_meta['_seo_meta_desc'] = isset($_POST['_seo_meta_desc']) ? $_POST['_seo_meta_desc'] : '';
 
    foreach ($cta_meta as $key => $value) { 
        if( $post->post_type == 'revision' ) return;
        if(get_post_meta($post->ID, $key, FALSE)) { 
            update_post_meta($post->ID, $key, $value);
        } else { 
            add_post_meta($post->ID, $key, $value);
        }
        if(!$value) delete_post_meta($post->ID, $key); 
    }
 
}

function sb_get_the_title(){
	global $post;
	$title_array = get_post_custom_values('_seo_title', $post->ID);
	if(is_array($title_array)){
		$title = array_pop($title_array);
	}else{
		return wp_title('&laquo;', false, 'right').get_bloginfo('name');
	}
	return $title;
}

function sb_the_title(){
	echo sb_get_the_title();	
}

function sb_get_the_meta_desc(){
	global $post;
	$meta_description_array = get_post_custom_values('_seo_meta_desc', $post->ID);
	if(is_array($meta_description_array)){
		$meta_description = array_pop($meta_description_array);
	}else{
		return get_the_excerpt();
	}
	return $meta_description;
}

function sb_the_meta_desc(){
	echo sb_get_the_meta_desc();	
}


/***
 *	Add the modified time onto files we want versioned to force reloading
 */
function auto_version($file)
{
  if(strpos($file, '/') !== 0 || !file_exists($_SERVER['DOCUMENT_ROOT'] . $file))
    return $file;

  $mtime = filemtime($_SERVER['DOCUMENT_ROOT'] . $file);
  return preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
}

//add_action('init', 'cloneRole');
function cloneRole()
{
    global $wp_roles;
    if ( ! isset( $wp_roles ) )
        $wp_roles = new WP_Roles();

    $editor = $wp_roles->get_role('editor');
    //Adding a 'new_role' with all admin caps
    $fairy = $wp_roles->add_role('fairy', 'Fairy', $editor->capabilities);
    $fairy->add_cap( 'edit_theme_options' );
}

// --- Used to add the appropriate body classes to the home page to get the animation to work
add_filter('body_class','sb_body_classes');
function sb_body_classes($classes) {
	if(is_front_page()){
		$classes[] = 'opening';
		$classes[] = 'hide-UI';
		$classes[] = 'view-2D';
		$classes[] = 'zoom-large';
	}
	return $classes;
}

add_action( 'wp_enqueue_scripts', 'sb_add_stylesheets' );
function sb_add_stylesheets() {
    if(is_front_page()){
    	wp_register_style( 'solar-system-style', '/wp-content/themes/spacebrews/solar-system.css');
    	wp_enqueue_style( 'solar-system-style' );
    }
}

?>