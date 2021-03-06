<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable =['product_name','supplier','company_price','selling_price','cartons','boxes','pieces'];
    
    public function stocks(){
        return $this->hasMany(Stocks::class);
    }
    public function orders(){
        return $this->belongsToMany(Orders::class);
    }
}
