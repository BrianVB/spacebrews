<?php
/**
 * @package AccelerateMedia
 * @subpackage Accelerate
 */
$sidebar_details = sidebar_details();
?>
<div id="<?php echo $sidebar_details['id']; ?>" class="sidebar grid_4">
	<?php 	/* Widgetized sidebar, if you have the plugin installed. */
       if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar($sidebar_details['name']) ) : ?>	
    <?php endif; ?>
</div>