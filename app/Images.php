<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';
    protected $fillable = ['image','product_id'];
    public $timestamps = false;

    public function product(){
        $this->belongsTo('App\Products');
    }
}
