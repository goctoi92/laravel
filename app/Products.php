<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','alias','price','intro','content','image','keyword','description','user_id','category_id'];
    public $timestamps = false;

    public function category(){
        return $this->belongsTo('App\Categorys');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function image(){
        $this->hasMany('App\Images');
    }
}
