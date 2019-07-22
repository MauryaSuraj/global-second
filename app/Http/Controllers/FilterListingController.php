<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterListingController extends Controller
{
    public function filter(){
        $like_dislike = DB::table('like')
            ->join('bussiness_listings', 'bussiness_listings.id', '=','like.listing_id')->get();
//            ->orderByRaw('');
        dd($like_dislike);

    }

    public function location(Request $request){
        $request->validate([
           'item_search' => 'required'
        ]);

        $search_term = $request->input('item_search');
        echo $search_term;

        $results = DB::table('locations')->where('address', 'LIKE','%'.$search_term.'%')
            ->orWhere('city', 'LIKE','%'.$search_term.'%')
            ->orWhere('area', 'LIKE', '%'.$search_term.'%')
            ->paginate(15);
        dd($results);

        //bind to view
    }
    public function latest(){

        $latest_listing = DB::table('bussiness_listings')->where('status','=',1)
            ->orderByDesc('created_at')->get();
        dd($latest_listing);

    }
    public function best_deal(){
        //custom filter here based on user input


    }


    //search bar complete
}
