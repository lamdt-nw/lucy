( function( $ ) {
    var pxl_widget_piechart_handler = function( $scope, $ ) {
        setTimeout(function(){
            elementorFrontend.waypoint($scope.find('.pxl-piechart .percentage'), function () {
                var track_color = $(this).data('track-color');
                var bar_color = $(this).data('bar-color');
                var bar_color_from = $(this).data('bar-color-from');
                var bar_color_to = $(this).data('bar-color-to');
                var line_width = $(this).data('line-width');
                var line_cap = $(this).data('line-cap');
                var chart_size = $(this).data('size');

                var options = {
                    animate: 2000,
                    lineWidth: line_width,
                    barColor: bar_color,
                    trackColor: track_color,
                    scaleColor: false,
                    lineCap: line_cap,
                    rotate: 0,
                    size: chart_size
                };
                $(this).easyPieChart(options);
            }, {
                offset: '95%',
                triggerOnce: true
            });
        }, 300);
    };

    $( window ).on( 'elementor/frontend/init', function() {
        elementorFrontend.hooks.addAction( 'frontend/element_ready/pxl_pie_chart.default', pxl_widget_piechart_handler );
        elementorFrontend.hooks.addAction( 'frontend/element_ready/pxl_client_review.default', pxl_widget_piechart_handler );
    } );
} )( jQuery );