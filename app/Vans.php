<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vans extends Model
{
    protected $fillable = ['name'];
    public function orders(){
        return $this->hasMany(Orders::class);
    }
}
