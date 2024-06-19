<?php
/**
 * Plugin Name: My Widgets
 * Description: Un plugin personalizado para agregar widgets a Elementor
 * Version: 1.0.0
 * Author: Diana Quesada
 */

if (!defined('ABSPATH')) {
    exit;
}

function add_elementor_widget_categories($elements_manager)
{
    $elements_manager->add_category('my-widgets', [
        'title' => __('My Widgets', 'my-widgets'),
        'icon' => 'fa fa-plug',
    ]);
}
add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');