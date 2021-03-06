<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;
use App\Categorys;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller {

    public function indexAction(){
        $data = Categorys::select('id','name','parent_id','description')->orderBy('id','DESC')->get()->toArray();
        return view('admin/category/list')->with('data',$data);
    }

    public function deleteAction($id){
        $cate = Categorys::find($id);
        $cate->delete();
        return redirect()->route('admin.category.list')
            ->with(['flash_level'=>'success','flash_message'=>'Delete Success']);
    }

    public function editAction($id){
        $data = Categorys::findOrFail($id)->toArray();
        $parent = Categorys::select('id','name','parent_id')->get()->toArray();
        return view('admin/category/add',compact('parent','data','id'));
    }

    public function postEditAction(\Illuminate\Http\Request $request, $id){
        $this->validate($request,
            ["inputName" => "required"],
            ["inputName.required" => "Tên không để trống!"]
        );
        $cate = Categorys::find($id);
        $category = new Categorys();
        $category->editCate($cate,$request);
        return redirect()->route('admin.category.list')
            ->with([
                'flash_message' => 'Edit success.!',
                'flash_level' => 'success'
            ]);
    }

    public function addAction(){
        $data = Categorys::select('id','name','parent_id')->get()->toArray();
        return view('admin/category/add')->with('parent',$data);
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