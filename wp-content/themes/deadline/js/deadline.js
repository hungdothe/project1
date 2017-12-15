jQuery(document).ready(function($) { 
    'use strict';

    var $document = $(document);
    var $window = $(window);


    /**
    * Document ready (jQuery)
    */
    $(function () {

        /**
         * Activate superfish menu.
         */
        $('.sf-menu').superfish({
            'speed': 'fast',
            'delay' : 0,
            'animation': {
                'height': 'show'
            }
        });

    });

        /**
         * SlickNav
         */

	$('#menu-main-slick').slicknav({
		prependTo:'.navbar-header',
		label: deadlineStrings.slicknav_menu_home,
		allowParentLinks: true
	});

    function deadline_mobileadjust() {
        
        var windowWidth = $(window).width();

        if( typeof window.orientation === 'undefined' ) {
            $('#menu-main-menu').removeAttr('style');
         }

        if( windowWidth < 769 ) {
            $('#menu-main-menu').addClass('mobile-menu');
         }
 
    }
    
    deadline_mobileadjust();

    $(window).resize(function() {
        deadline_mobileadjust();
    });

});