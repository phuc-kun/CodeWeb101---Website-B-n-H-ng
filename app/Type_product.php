<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_product extends Model
{
    protected $table = "type_product";
    public function products(){
    	return $this->hasMany('App\Product','id_type','id');
    }
}
