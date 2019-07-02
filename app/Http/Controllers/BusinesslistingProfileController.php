<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinesslistingProfileController extends Controller
{
    public function index(){
        return view('listing.listshow');
    }
}
