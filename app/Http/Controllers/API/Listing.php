<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\ContactFormListing;
use App\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Listing extends Controller
{
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = DB::table('bussiness_listings')
            ->join('categories', 'bussiness_listings.category_id','=', 'categories.id')
            ->join('tags', 'bussiness_listings.tag_id','=', 'tags.id')
            ->join('users', 'bussiness_listings.user_id','=','users.id')
            ->join('locations','locations.listing_id','=','bussiness_listings.id')
            ->select('bussiness_listings.*','categories.name as category_name', 'tags.name as tag_name','users.name as user_name', 'users.email as user_email', 'users.phone as phone','locations.address','locations.city','locations.area','locations.pincode' )
            ->get();
        return response()->json(['success' => $listings], $this->successStatus);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listings = DB::table('bussiness_listings')->where('bussiness_listings.id', $id)
            ->join('categories', 'bussiness_listings.category_id','=', 'categories.id')
            ->join('tags', 'bussiness_listings.tag_id','=', 'tags.id')
            ->join('users', 'bussiness_listings.user_id','=','users.id')
            ->join('locations','locations.listing_id','=','bussiness_listings.id')
            ->select('bussiness_listings.*','categories.name as category_name', 'tags.name as tag_name','users.name as user_name', 'users.email as user_email', 'users.phone as phone','locations.address','locations.city','locations.area','locations.pincode' )
            ->get();
        return response()->json(['success' => $listings], $this->successStatus);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
