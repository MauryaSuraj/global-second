<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BussinessListing extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tag(){
        return $this->belongsTo(Tags::class);
    }
    public function contactformlisting(){
        return $this->belongsTo(ContactFormListing::class);
    }
    public function reviews(){
        return $this->belongsTo(Reviews::class);
    }
}
