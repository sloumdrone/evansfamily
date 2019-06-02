/**
 * Custom Javascripts
 *
 * Enter your custom javascript here.
 * All .js files in the /src/js/custom folder will be
 * bundled and run through babel for old browser support
 * then minified and placed in /js/custom.min.js
 *
 * If you want to use un-bundled scripts
 * add them to the /js folder and include them
 * in your template or in /inc/enqueue.php
 */

var site = (function($){
    var toggleMobileMenu = function() {
        $('ul.menu').toggleClass('expanded');
    };

    var scrolldown = function(e) {
        e.preventDefault();
        var scrollTarget = $(this).attr("href");
        var position = $(scrollTarget).offset().top - 45;

        window.scroll({
            top: position,
            left: 0,
            behavior: 'smooth'
        });
    };

    var clickHandlers = function() {
        $('button.arrow').on('click', toggleMobileMenu);
        $('.downlink').on('click', scrolldown);
    };

    var init = function() {
        clickHandlers();
    };

    return {
        init: init
    };

})(jQuery);


jQuery(document).ready(function(){
    site.init();
});
