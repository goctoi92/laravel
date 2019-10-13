class menu {

    constructor() {
        this._initHeader();
    }
    _initHeader() {
        let $header = $("#section-menu");

        let headerFixed = () => {
            $header.addClass("head-fixed-top");
            setTimeout(() => {
                $header.addClass("sticky");
            }, 100);
        };

        // set class menu when scroll
        $(window).scroll(function () {
            if ($(this).scrollTop() > 20 && !$header.hasClass('head-fixed-top')) {
                headerFixed();
            }
            if ($(this).scrollTop() < 20) {
                $header.removeClass("head-fixed-top sticky");
            }
        });
    }
}

new menu();