<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterListingController extends Controller
{
    public function filter(){
        $like_dislike = DB::table('like')
            ->join('bussiness_listings', 'bussiness_listings.id', '=','like.listing_id')->get();
        dd($like_dislike);

    }

    public function location(Request $request){
        $categories = Category::all();
        $tags = Tags::all();
        $request->validate([
           'item_search' => 'required'
        ]);

        $search_term = $request->input('item_search');
        $query = $search_term;
        $results = DB::table('locations')->where('address', 'LIKE','%'.$search_term.'%')
            ->orWhere('city', 'LIKE','%'.$search_term.'%')
            ->orWhere('area', 'LIKE', '%'.$search_term.'%')
            ->join('bussiness_listings','bussiness_listings.id', '=', 'locations.listing_id')
            ->select('bussiness_listings.*','locations.*')
            ->paginate(15);
        $listings = $results;
        return view('search.search',compact('categories','listings','tags', 'query'));
        //bind to view
    }
    public function latest(){
        $tags = Tags::all();
        $categories = Category::all();
        $query ='';
        $listings = DB::table('bussiness_listings')->where('status','=',1)
            ->orderByDesc('bussiness_listings.created_at')
            ->join('locations', 'locations.listing_id', '=', 'bussiness_listings.id')
            ->select('bussiness_listings.*','locations.*')->paginate();
        return view('search.search',compact('categories','listings','tags', 'query'));
    }
    public function best_deal(Request $request)
    {
        $categories = Category::all();
        $tags = Tags::all();
        //custom filter here based on user input
        $request->validate([
            'search_term' => 'required'
        ]);

        $search_term = $request->input('search_term');
        $query = $search_term;
//        echo $search_term;
        $listings = DB::table('bussiness_listings')->where('bussiness_listings.name', 'LIKE','%'.$search_term.'%')
            ->orWhere('bussiness_listings.description', 'LIKE','%'.$search_term.'%')
            ->orWhere('bussiness_listings.meta_description','LIKE','%'.$search_term.'%')
            ->join('categories','bussiness_listings.category_id','=','categories.id')
            ->join('locations', 'locations.listing_id', '=', 'bussiness_listings.id')
            ->orWhere('categories.name', 'LIKE', '%'.$search_term.'%')
            ->select('bussiness_listings.*','locations.*')->paginate();
        return view('search.search',compact('categories','listings','tags', 'query'));
    }
}
