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

    wp.customize('header_background', function (value) {
        value.bind(function (newval) {
            console.log(newval)
            $('.title-wrapper').css('background-image', 'url(' + newval + ')');
        });
    });

    wp.customize('website_title', function (value) {
        value.bind(function (newval) {
            $('#title').html(newval);
        });
    });

    wp.customize('monday_hours', function (value) {
        value.bind(function (newval) {
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

    wp.customize('contact_city', function (value) {
        value.bind(function (newval) {
            console.log("hello");
            $('#city_span').html(newval);
        });
    });

    wp.customize('contact_address', function (value) {
        value.bind(function (newval) {
            $('#address_span').html(newval);
        });
    });

    wp.customize('contact_phone', function (value) {
        value.bind(function (newval) {
            $('#phone_span').html(newval);
        });
    });

    wp.customize('contact_email', function (value) {
        value.bind(function (newval) {
            $('#email_span').html(newval);
        });
    });

})(jQuery);