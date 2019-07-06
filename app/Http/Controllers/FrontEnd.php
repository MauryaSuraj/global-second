<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FrontEnd extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->latest()->paginate(6);
        foreach ($categories as $category){
            $url_category_image = Storage::url($category->image);
        }
        $categorys = DB::table('categories')->get();
        $listings = DB::table('bussiness_listings')->where('status', '1')->latest()->paginate(4);
        return view('frontend.index',compact('categories','listings', 'url_category_image','categorys'));
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
