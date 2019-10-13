class index {

    constructor() {
        this.view();
    }
    view() {
        let $shadeMask = $(".shade-mask");
        let $docInfo = $(".doc-info");
        $shadeMask.each(function(i, obj) {
            let bg = "linear-gradient(transparent 0%, "+$(obj).data("color")+" 38%)";
            $(obj).css("background-image",bg);
        });
        $docInfo.each(function(i, obj) {
            $(obj).find("p").css("color",$(obj).data("color"));
            $(obj).find("span").css("color",$(obj).data("color"));
        });

    }
}

new index();