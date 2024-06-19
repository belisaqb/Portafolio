(function ($) {
    // console.log('aaaaaaaaaaaa');
    const sketchfabWidgetHandle = function ($scope, $) {
        console.log('aaaaaaaaaaaa');
    };
    $(window).on('elementor/frontend/init', function ($scope) {
        elementorFrontend.hooks.addAction(
            'frontend/element_ready/sketchfab-widget.default',
            sketchfabWidgetHandle
        );
    });
})(jQuery);