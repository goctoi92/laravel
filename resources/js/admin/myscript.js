class MyScript {
    constructor(){
        this._init();
    }

    _init(){
        let $myAlert = $('.alert');
        let $itemDelete = $('.item-delete');

        $myAlert.fadeOut(4000);
        $itemDelete.click(() => {
            if (window.confirm('Are you sure delete it.??'))
                return true;
            return false;
        })
    }
}

new MyScript();