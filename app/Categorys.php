<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use \Lib\Text;

class Categorys extends Model
{
    protected $table = 'categorys';
    protected $fillable = ['name','alias','order','parent_id','keyword','description'];
    public $timestamps = true;


    public function product(){
        return $this->hasMany('App\Products');
    }

    /**
     * @param Request $request
     */
    public function addCate(Request $request){
        $category = new Categorys();
        $category->name = $request->input('inputName');
        $category->alias = \Lib\Text::rewriteTitle($request->input('inputAlias'));
        $category->order = $request->input('inputOrder');
        $category->parent_id = $request->input('inputParent');
        $category->keyword = $request->input('inputKeyword');
        $category->description = $request->input('inputDescription');
        $category->save();
    }

    /**
     * @param Request $request
     */
    public function editCate(Categorys $category,Request $request){
        $category->name = $request->input('inputName');
        $category->alias = \Lib\Text::rewriteTitle($request->input('inputAlias'));
        $category->order = $request->input('inputOrder');
        $category->parent_id = $request->input('inputParent');
        $category->keyword = $request->input('inputKeyword');
        $category->description = $request->input('inputDescription');
        $category->save();
    }
}
