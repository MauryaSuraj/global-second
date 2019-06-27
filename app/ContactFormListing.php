<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactFormListing extends Model
{
    protected $guarded = [];

    public function bussinessListing(){
        return $this->hasOne(BussinessListing::class);
    }

}
