/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
(function ($) {  

    //Update site background color...
    wp.customize('background_color', function (value) {
        value.bind(function (newval) {
            console.log(newval)
            $('.brown-section').css('background-color',newval);
        });
    });

    wp.customize('website_title', function (value) {
        value.bind(function (newval) {
            console.log(newval)
            $('#title').html(newval);
        });
    });

    wp.customize('monday_hours', function (value) {
        value.bind(function (newval) {
            console.log("monday hours: "+ newval);
            $('#monday_hours_span').html(newval);
        });
    });

    wp.customize('tues_fri_hours', function (value) {
        value.bind(function (newval) {
            $('#tue_hours_span').html(newval);
        });
    });

    wp.customize('sat_sun_hours', function (value) {
        value.bind(function (newval) {
            $('#sat_hours_span').html(newval);
        });
    });

    wp.customize('holiday_hours', function (value) {
        value.bind(function (newval) {
            $('#holidays_hours_span').html(newval);
        });
    });
    wp.customize('blogname', function (value) {
        value.bind(function (newval) {
            console.log("blogname!");
            $('#holidays_hours_span').html(newval);
        });
    });

})(jQuery);