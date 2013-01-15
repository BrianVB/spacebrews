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
		if(is_page()){
			$sidebar['name'] = 'Page Sidebar'; 
		} if(is_single()){
			$sidebar['name'] = 'Post Sidebar';
		} if(is_home()){
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



/****************************************************************
	Add a theme options page to the admin area
****************************************************************/
$themename = "Spacebrews";
$shortname = "sb";
$dir = get_bloginfo ( 'template_directory' );

// --- Options that we will have on the admin page
$options = array (
    array(  "name" => 'jQuery Replaced',
		    "desc" => 'The newest version of the jQuery library has been copied and pasted into the top of global.js.',
            "id" => $shortname."_jquery_replaced",
            "type" => "checkbox",
            "std" => "false"
        ),
    array(  "name" => 'Htaccess Updated',
		    "desc" => 'The .htacess file has been updated to do rewrites for auto-versioning of the stylesheet and javascripts',
            "id" => $shortname."_htaccess_updated",
            "type" => "checkbox",
            "std" => "false"
        ),
	array(  "name" => "Remove auto &lt;p&gt; tag formatting sitewide?",
		"id" => $shortname."_remove_autoformat",
		"type" => "checkbox",
		"std" => "false"
		)
	);

// --- If the option is not in the database it sets the value for the variable to your default value
foreach ($options as $value) {
    if (get_option( $value['id'] ) === FALSE) { 
		$$value['id'] = $value['std']; 
	} else { 
		$$value['id'] = get_option( $value['id'] ); 
	} 
}
    
    
function mytheme_add_admin() {
    global $themename, $shortname, $options;
    if ( isset($_GET['page']) && $_GET['page'] == basename(__FILE__) ) {
        if ( isset($_REQUEST['action']) && 'save' == $_REQUEST['action'] ) {
                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}
                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { 
						update_option( $value['id'], $_REQUEST[ $value['id'] ]  );
					} else { 
						delete_option( $value['id'] ); 
					} 
				}
                wp_redirect("themes.php?page=functions.php&saved=true");
                die;
        } else if( isset($_REQUEST['action']) && 'reset' == $_REQUEST['action'] ) {
            foreach ($options as $value) {
                delete_option( $value['id'] ); 
			}
            header("Location: themes.php?page=functions.php&reset=true");
            die;
        }
    }
    // --- calls our function below
	add_theme_page($themename." Options", "Theme Options", 'edit_themes', basename(__FILE__), 'mytheme_admin'); 
}







// --- This is the form that is put on the admin theme page so that we can choose the options (called in add_theme_page above)
function mytheme_admin() {
    global $themename, $shortname, $options;
    if ( isset($_REQUEST['saved']) && $_REQUEST['saved'] ) {
		echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
	}
    if ( isset($_REQUEST['reset']) && $_REQUEST['reset']) {
		echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
	}
    
?>
<div class="wrap">
<h2><?php echo $themename; ?> <?php _e('settings', 'default'); ?></h2>

<form method="post">

<table class="optiontable">

<?php 

foreach ($options as $value) { 
	
	if ($value['type'] == "text") { ?>
			
        <tr valign="top"> 
            <th scope="row"><?php echo $value['name']; ?>:</th>
            <td>
                <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" />
            </td>
        </tr>
	
	<?php
	} elseif ($value['type'] == "select") { 
	?>
	
        <tr valign="top"> 
            <th scope="row"><?php echo $value['name']; ?>:</th>
            <td>
                <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
                    <?php foreach ($value['options'] as $key => $val) { ?>
                    <option value="<?php echo $val; ?>"<?php if (get_option ( $value['id'] )) {if ( get_option( $value['id'] ) == $val) { echo ' selected="selected"'; }} elseif ($val == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $key; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
	
	<?php 
	} elseif ($value['type'] == "textarea") { 
	?>
	
        <tr valign="top"> 
            <th scope="row"><?php echo $value['name']; ?>:</th>
            <td>
                <textarea cols="100" rows="10" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?></textarea>
            </td>
        </tr>
	
	
	<?php 
	} elseif ($value['type'] == "checkbox") { 
	?>
	
        <tr valign="top"> 
            <th scope="row"><?php echo $value['name']; ?>: </th>
            <td>
            	<?php
				if(get_option($value['id']) == true){
					$checked = 'checked="checked"'; 
				} else { 
					$checked = '';
				} 
				?>
                <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
            </td>
        </tr>
	
	
	<?php 
	} 
}
?>

</table>

<p class="submit">
<input name="save" type="submit" value="Save changes" />
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>

<?php
} // --- End function mytheme_admin
add_action('admin_menu', 'mytheme_add_admin');  // --- Call to actually add the admin menu page


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
	If the option is checked in theme admins, stop auto formatting
*******************************************************************/
if(get_option('accel_remove_autoformat') == true){
	$filters=array('term_description', 'the_content', 'the_excerpt');
	foreach ( $filters as $filter ) {
		remove_filter($filter, 'wpautop');
	}
}

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