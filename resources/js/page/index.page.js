class index {

    constructor() {
        this.view();
    }
    view() {
        let $shadeMask = $(".shade-mask");
        let $docInfo = $(".doc-info");
        $shadeMask.each(function(i, obj) {
            let bg;
            if ($(obj).data('col') == "4"){
                bg = "linear-gradient(transparent 0%, "+$(obj).data("color")+" 38%)";
            }

            else{
                if ($( window ).width() <= 500)
                    bg = "linear-gradient(transparent 0%, "+$(obj).data("color")+" 38%)";
                else
                    bg = "linear-gradient(90deg, "+$(obj).data('color')+" 82%, transparent 100%)";
            }
            $(obj).css("background-image",bg);
            console.log(bg);
        });
        $docInfo.each(function(i, obj) {
            $(obj).find("p").css("color",$(obj).data("color"));
            $(obj).find("span").css("color",$(obj).data("color"));
        });
    }
}

new index();