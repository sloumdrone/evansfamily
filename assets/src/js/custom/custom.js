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

var header = (function($){
    var toggleMobileMenu = function() {
        $('ul.menu').toggleClass('expanded');
    };

    var clickHandlers = function() {
        $('button.arrow').on('click', toggleMobileMenu);
    };

    var init = function() {
        clickHandlers();
    };

    return {
        init: init
    };

})(jQuery);


jQuery(document).ready(function(){
    header.init();
});
