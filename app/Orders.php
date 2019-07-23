<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = ['vans_id','shops_id'];
    public function vans(){
        return $this->belongsTo(Vans::class);
    }
    public function shops(){
        return $this->belongsTo(Shops::class);
    }
    public function products(){
        return $this->belongsToMany(Products::class);
    }
}
