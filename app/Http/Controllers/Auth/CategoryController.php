<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;
use App\Categorys;

class CategoryController extends Controller {

    public function indexAction(){
        return view('admin/category/list');
    }

    public function addAction(){
        return view('admin/category/add');
    }

    public function postAddAction(CateRequest $request){
        $cate = new Categorys();
        $cate->addCate($request);
        return redirect()->route('admin.category.list')
            ->with([
                'flash_message' => 'Insert success.!',
                'flash_level' => 'success'
            ]);
    }
}