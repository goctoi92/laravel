class MyScript {
    constructor(){
        this._init();
    }

    _init(){
        let $myAlert = $('.alert');


        $myAlert.fadeOut(4000);
    }
}

new MyScript();