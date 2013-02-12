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
    
            <div class="navigation">
                <div class="left"><?php previous_post_link('&laquo; %link') ?></div>
                <div class="right"><?php next_post_link('%link &raquo;') ?></div>
                <div class="clear"></div>
            </div>
    
            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <h2 class="title post-title"><?php the_title(); ?></h2>
                <small class="post-date"><?php the_time('l, F jS, Y') ?></small>
                <div class="entry">
                    <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
    
                    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                    <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
    
                    <p class="postmetadata alt"> 
                        This entry is filed under <?php the_category(', ') ?>. <?php edit_post_link('Edit this entry','','.'); ?>
                    </p>
    
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
