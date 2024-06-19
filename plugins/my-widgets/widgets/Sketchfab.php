<?php
if (!defined('ABSPATH')) {
    exit;
}

use Elementor\Widget_Base;

add_action('elementor/init', function () {
    class Sketchfab_Widget_Base extends Widget_Base
    {
        public function get_name()
        {
            return 'sketchfab-widget';
        }
        public function get_title()
        {
            return __('Sketchfab', 'my-widgets');
        }
        public function get_icon(){
            return 'eicon-nerd-chuckle';
        }
        public function get_categories(){
            return ['my-widgets'];
        }
        public function get_script_depends(){
            return [] ;
        }
        public function get_style_depends(){
            return [];
        }

    }
})