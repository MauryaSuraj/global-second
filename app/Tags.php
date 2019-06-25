<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $guarded =[];

    public function listing(){
        return $this->hasMany(BussinessListing::class);
    }
}
