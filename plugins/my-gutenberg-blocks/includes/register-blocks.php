<?php

function my_gutenberg_blocks_register_blocks(){
    $asset_file = plugin-dir_path(__FILE__) ."../build/index.asset.php";

    //Registrar scripts el editor del bloque
    wp_register_script(
        "my-gutenberg-blocks",
        plugins_url("build/index.js", __DIR__.'/../'),
        $asset_file['dependencies'],
        $asset_file['version']
    );

    //Registrar los estilos del editor de bloques
    wp_register_style(
        "my-gutenberg-blocks-editor-style",
        plugins_url("build/editor.css", __DIR__.'/../'),
        array(),
        $asset_file['version']
    );

    //Regsitrar los estilos del front-end
    wp_register_style(
        "my-gutenberg-blocks-style",
        plugins_url("build/style.css", __DIR__.'/../'),
        array(),
        $asset_file['version']
    );

    require_once plugin_dir_path(__FILE__) .'blocks/sketchfab-block.php';
    // require_once plugin_dir_path(__FILE__) .'blocks/poke-block.php';
}
add_action('init', 'my_gutenberg_blocks_register_blocks');
