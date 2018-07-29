<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";
    public function bill_details(){
    	return $this->hasMany('App\Bill_detail','id_bill','id');
    }
    public function product(){
    	return $this->belongsTo('App\Customer','id_customer','id');
    }
}
