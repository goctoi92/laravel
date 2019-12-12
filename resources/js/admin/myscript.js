class MyScript {
    constructor(){
        this._init();
    }

    _init(){
        let $myAlert = $('.alert');
        let $itemDelete = $('.item-delete');
        let $toolSubmit = $('.btn-submit-tool-post');

        $myAlert.fadeOut(4000);
        $itemDelete.click(() => {
            if (window.confirm('Are you sure delete it.??'))
                return true;
            return false;
        });
        $toolSubmit.click(() => {
            console.log("nut click");
            $(".btn-submit-tool-post").prop('disabled', true);
            $(".icon-loading").removeClass("d-none");
        });
    }
}

new MyScript();