<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $guarded = [];

    public function user_review(){
        return $this->hasOne(User::class);
    }

    public function listings(){
        return $this->hasOne(BussinessListing::class);
    }
}
