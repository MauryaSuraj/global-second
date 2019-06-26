<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactFormListing extends Model
{
    protected $guarded = [];


    public function business_list(){
        return $this->belongsTo(BussinessListing::class);
    }
}
