<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;


class Stocks extends Model
{
    protected $fillable= ['products_id','cartons','boxes','pieces'];
    public function products(){
        return $this->belongsTo(Products::class);
    }
}
