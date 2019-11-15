<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Posts extends Model
{
    protected $table = 'posts';
    protected $fillable = ['name','content','alias','category_id','source_id','status','count_see','keyword','description'];
    public $timestamps = true;

    public function category(){
        return $this->belongsTo('App\Categorys');
    }

    public function addPost($request){
        $post = new Posts();
        $post->name = $request['name']?? "Không lấy được data";
        $post->content = $request['content']?? "Không lấy được data";
        $post->alias = \Lib\Text::rewriteTitle($request['name']?? "Không lấy được data");
        $post->category_id = $request['category_id'];
        $post->source_id = $request['source_id'];
        $post->status = $request['status'];
        $post->count_see = $request['count_see'];
        $post->keyword = $request['keyword']?? "Không lấy được data";
        $post->description = $request['description']?? "Không lấy được data";
        $post->save();
    }
}
