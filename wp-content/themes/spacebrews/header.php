<?php
/**
* @package AccelerateMedia
* @subpackage Accelerate
*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=1100" />
<title><?php sb_the_title(); ?></title>
<meta name="description" content="<?php sb_the_meta_desc(); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="/wp-content/themes/spacebrews/images/favicon.ico" type="image/x-icon" />
<link rel='stylesheet' id='stylesheet-css'  href='/wp-content/themes/spacebrews/reset.css' type='text/css' media='all' />
<link rel='stylesheet' id='stylesheet-css'  href='/wp-content/themes/spacebrews/960.css' type='text/css' media='all' />
<link rel='stylesheet' id='stylesheet-css'  href='<?php echo auto_version('/wp-content/themes/spacebrews/style.css'); ?>' type='text/css' media='all' />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<!--[if IE]>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/spacebrews/ie.css" />
<![endif]-->

</head>

<body <?php body_class(); ?>>
    <div id="header">
    	<div class="container_12">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'sort_column' => 'menu_order', 'container_class' => 'header-nav', 'fallback_cb' => 'menu_fallback' ) ); ?>
    	</div>
    </div>   