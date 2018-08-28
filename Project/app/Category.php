<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $timestamps = true;

    public function products() {
        return $this->hasMany('App\Product');
    }

    public function parent() {
        return $this->belongsTo('App\Category','parentId');
    }

    public function children() {
        return $this->hasMany('App\Category', 'parentId', 'id');
    }
}
