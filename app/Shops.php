<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
    protected $fillable = ['Shop_Name','Shopkeeper_Name','street','City','Country','Telephone_No'];
}
