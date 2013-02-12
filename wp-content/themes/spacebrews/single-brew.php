<?php
/**
 * @package AccelerateMedia
 * @subpackage Accelerate
 */

get_header();
?>
<div id="page">
    <div id="page-container" class="container_12">
        <div class="grid_8">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <h2><?php the_title(); ?></h2>
                <div class="entry">
                    <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>    
                </div>
            </div>
    
        <?php comments_template(); ?>
    
        <?php endwhile; else: ?>
    
            <p>Sorry, no posts matched your criteria.</p>
    
    <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>   
    </div>
</div>
<?php get_footer(); ?>
