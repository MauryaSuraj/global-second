<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusinesslistingProfileController extends Controller
{
    public function index(){
        $user_id = auth()->user()->id;
//        $listings = DB::table('bussiness_listings')->where('user_id', $user_id)
//            ->leftJoin('categories', 'categories.id', '=', 'bussiness_listings.category_id')
//            ->select()
//            ->get();
        $listings = DB::table('bussiness_listings')
//            ->select('bussiness_listings.*','categories.name')
//            ->leftJoin('categories', 'bussiness_listings.id', '=', 'categories.id')
            ->where('user_id',$user_id)
            ->get();
//dd($listings);
        return view('listing.listshow', compact('listings'));
    }
}
