(function ($) {
    // console.log('aaaaaaaaaaaa');
    const pdfcontainerWidgetHandle = function ($scope, $) {
        // console.log('aaaaaaaaaaaa');
    };
    $(window).on('elementor/frontend/init', function ($scope) {
        elementorFrontend.hooks.addAction(
            'frontend/element_ready/pdfcontainer-widget.default',
            pdfcontainerWidgetHandle
        );
    });
})(jQuery);