<?php
/**
 * @package AccelerateMedia
 * @subpackage Accelerate
 */
$sidebar_details = sidebar_details();
?>
<div id="<?php echo $sidebar_details['id']; ?>" class="sidebar grid_4">
	<?php dynamic_sidebar($sidebar_details['name']); ?>
</div>