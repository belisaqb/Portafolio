<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if (astra_page_layout() == 'left-sidebar'): ?>

    <?php get_sidebar(); ?>

<?php endif ?>

<div id="primary" <?php astra_primary_class(); ?>>
    <div class="margin-single-page">


        <?php astra_primary_content_top(); ?>

        <?php //astra_content_loop(); ?>

        <div class="red-header">
        </div>
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <div class="post-container">
                    <h2 class="post-title"><?php the_title(); ?></h2>
                    <div>
                        <?php the_content(); ?>                      
                        <?php echo get_field('Fecha'); ?>
                        <?php $model = get_field('sketchfab_url'); ?>
                        <iframe src="<?php echo $model ?>/embed" frameborder="0"></iframe>                    
                    
                    </div>
                </div>                
            <?php endwhile; endif; ?>

        <?php astra_primary_content_bottom(); ?>
    </div>

</div><!-- #primary -->

<?php if (astra_page_layout() == 'right-sidebar'): ?>

    <?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>