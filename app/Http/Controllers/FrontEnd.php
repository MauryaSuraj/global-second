<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontEnd extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->latest()->paginate(4);
        $listings = DB::table('bussiness_listings')->latest()->paginate(4);
        return view('frontend.index',compact('categories','listings'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact ()
    {
        return view('frontend.contact');
    }

    public function supporter()
    {
        return view('frontend.supporter');
    }

}
