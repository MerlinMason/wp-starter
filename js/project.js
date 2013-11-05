(function ($) {
    "use strict";

    var wpstarter = {

        init: function () {
            this.bindUIActions();
        },

        bindUIActions: function () {
            $(".btn").on("click", function (e) { wpstarter.sayHello(e); });
        },

        windowLoaded: function () {
            console.log("Loaded");
        },

        sayHello: function () {
            console.log("Hello World");
        }

    };

    // DOM Ready
    $(function () { wpstarter.init(); });
    // Images Loaded
    $(window).load(function () { wpstarter.windowLoaded(); });
    
} (jQuery));
