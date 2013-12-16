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

        sayHello: function (e) {
            var button = $(e.currentTarget);
            console.log("You clicked " + button);
        }

    };

    // DOM Ready
    $(function () { wpstarter.init(); });
    // Images Loaded
    $(window).load(function () { wpstarter.windowLoaded(); });

} (jQuery));
