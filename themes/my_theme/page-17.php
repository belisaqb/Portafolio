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

    <?php astra_primary_content_top(); ?>

    <?php //astra_content_loop(); ?>

    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <div class="red-header">
            </div>
            <div class="content-container">
                <div class="col-4">
                    <p class="red-line"></p>
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="col-8">
                    <p class="content-p">I have skills in software development, understanding programming logic in languages such as C# and Java, and database management. Thanks to this, I have worked on creating interactive and user-friendly websites using both front-end and back-end technologies. My knowledge also encompasses agile methodologies and their implementation in project management.</p>
                </div>

               
            </div>
            <div>
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>

    <?php astra_primary_content_bottom(); ?>

</div><!-- #primary -->

<?php if (astra_page_layout() == 'right-sidebar'): ?>

    <?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>