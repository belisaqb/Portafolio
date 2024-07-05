<?php
if (!defined('ABSPATH')) {
    exit;
}

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

add_action('elementor/init', function () {
    class Pdfcontainer_Widget extends Widget_Base
    {
        public function get_name()
        {
            return 'pdfcontainer-widget';
        }
        public function get_title()
        {
            return __('Pdfcontainer', 'my-widgets');
        }
        public function get_icon()
        {
            return 'eicon-integration';
        }
        public function get_categories()
        {
            return ['my-widgets'];
        }
        public function get_script_depends()
        {
            return ['pdfcontainer-script'];
        }
        public function get_style_depends()
        {
            return ['pdfcontainer-style'];
        }
        protected function register_controls()
        {
            $this->start_controls_section(
                'content_section',
                [
                    'label' => esc_html__('Content', 'textdomain'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                ]
            );

            $this->add_control(
                'pdf',
                [
                    'label' => esc_html__('Choose PDF', 'textdomain'),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'media_types' => ['application/pdf'],
                ]
            );

            $this->end_controls_section();
        }

        protected function render()
        {
            $settings = $this->get_settings_for_display();
            $pdf_url = $settings['pdf']['url'];

            if (empty($pdf_url)) {
                return; // Si $pdf_url está vacío, no mostramos nada.
            }
            ?>
        <a class="btn-cv" download href="<?php echo esc_attr($pdf_url); ?>">
            <?php echo esc_html__('Download CV', 'textdomain'); ?>
        </a>
        <?php
        }

        protected function content_template()
        {
            ?>
        <#
        var pdf_url = settings.pdf.url;

        if ( '' === pdf_url ) {
            return; // Si pdf_url está vacío, no mostramos nada.
        }
        #>
        <a class="btn-cv" download href="{{ pdf_url }}">
            <?php echo esc_html__('Download CV', 'textdomain'); ?>
        </a>
        <?php
        }


    }

    function register_pdfcontainer_widget()
    {
        \Elementor\Plugin::instance()->widgets_manager->register(new Pdfcontainer_Widget());
    }
    add_action("elementor/widgets/widgets_registered", "register_pdfcontainer_widget");
});