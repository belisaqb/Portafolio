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

        
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <div class="double-container">
                    <div class="column-one">
                        <h1 class="project-title"><?php the_title(); ?></h1>
                        <p class="red-line"></p>

                        <p class="m-0"><?php echo get_field('Fecha'); ?></p>

                        <h4 class="mb-3">Type of project: <span class="text-red"><?php echo get_field('categoria'); ?></span></h4>


                        <div class="badge-tools">
                            <h4 class="mb-1">Tools</h4>
                            <p class="m-0"><?php echo get_field('softwares'); ?></p>
                        </div>
                        <a href="#demo" class="btn-more mt-5">Watch Demo</a>
                    </div>
                    <div class="column-two">
                        <h2 class="text-light">Summary</h2>
                        <p class="red-line"></p>
                        <p class="m-0"><?php echo get_field('descripcion'); ?></p>
                        <a href="<?php echo get_field('github_url'); ?>">See on GitHub</a>

                    </div>
                </div>
                <!-- <div class="container-video">
                    <div id="demo" class="badge-video">
                        <h3 class="text-light mb-5">Demo</h3>
                        <?php //the_content(); ?>
                    </div>
                </div> -->

                <?php the_content(); ?>

            <?php endwhile; endif; ?>

        <?php astra_primary_content_bottom(); ?>
    </div>

</div><!-- #primary -->

<?php if (astra_page_layout() == 'right-sidebar'): ?>

    <?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>