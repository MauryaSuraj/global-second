<?php

namespace App\Http\Controllers;

use App\BussinessListing;
use App\Category;
use App\ContactFormListing;
use App\Listing;
use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = BussinessListing::all();
        $categories = Category::all();
        $tags = Tags::all();
        return view('listing.index',compact('listings','categories','tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listings = BussinessListing::all();
        $categories = Category::all();
        $tags = Tags::all();
        return view('listing.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $listings = BussinessListing::all();
        $categories = Category::all();
        $tags = Tags::all();
          $insert_data = DB::table('contact_form_listings')->insert([
             'name' => $request->input('name'),
             'email' => $request->input('email'),
             'phone' => $request->input('phone'),
             'message' => $request->input('message'),
             'bussiness_listing_id' => $request->input('listing_id'),
             'created_at' => Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon::now()->toDateTimeString()
          ]);
          if ($insert_data)
              return redirect()->back()->with('message', 'You have sended the Query !');
//        return view('listing.show/{$request->input(\'listing_id\')}',compact('listings','categories','tags'))->with('success','Form Submitted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $msgs = '';
        $bu_list = BussinessListing::find($id);
        $profiles = DB::table('users')->get()->where('id',$bu_list->user->id);
        $categories = DB::table('categories')->get()->where('id',$bu_list->category_id);
        $tags = DB::table('tags')->get()->where('id',$bu_list->tag_id);
        $reviews = DB::table('reviews')->get()->where('listing_id', $id);
//        dd($reviews);
//        $name = DB::table('reviews')->where('listing_id', $id)->pluck('user_id');
//        $reviews_user_details = DB::table('users')->get()->where('id', $name);
//        dd($reviews_user_details);

        return view('listing.show',compact('bu_list','profiles','tags','categories','msgs','reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
