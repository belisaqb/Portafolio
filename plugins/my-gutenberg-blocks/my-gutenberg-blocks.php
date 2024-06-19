<?php
/**
 * Plugin Name: My Gutenberg Blocks
 * Description: Mi plugin con bloques
 * Version: 1.0
 * Author: Diana Quesada Bermúdez
 */

if (!defined('ABSPATH')) {
    exit;
}

function my_gutenberg_blocks_register_blocks()
{
    $asset_file = include (plugin_dir_path(__FILE__) . "/build/index.asset.php");

    //Registrar scripts el editor del bloque
    wp_enqueue_script(
        "my-gutenberg-blocks",
        plugin_dir_url(__FILE__) . "build/index.js",
        // plugins_url("build/index.js", __DIR__."/../"),
        $asset_file['dependencies'],
        $asset_file['version']
    );

    //Registrar los estilos del editor de bloques
    wp_register_style(
        "my-gutenberg-blocks-editor-style",
        plugins_url("build/editor.css", __FILE__),
        array(),
        $asset_file['version']
    );

    //Regsitrar los estilos del front-end
    wp_register_style(
        "my-gutenberg-blocks-style",
        plugins_url("build/style.css", __FILE__),
        array(),
        $asset_file['version']
    );

    require_once plugin_dir_path(__FILE__) . 'includes/blocks/sketchfab-block.php';
    // require_once plugin_dir_path(__FILE__) .'blocks/poke-block.php';
}
add_action('init', 'my_gutenberg_blocks_register_blocks');

