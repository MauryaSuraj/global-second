<?php

namespace App\Http\Controllers;

use App\BussinessListing;
use App\Category;
use App\ContactFormListing;
use App\Listing;
use App\Tags;
use Illuminate\Http\Request;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, BussinessListing $contactFormListing)
    {
         $request->validate([
           'name' => 'required',
           'email' => 'required',
           'phone' => 'required',
           'message' => 'required',
        ]);
//        $contactFormListing->contact_form()->business_list->create($request->all());
        return view('listing.index')->with('success','Form Submitted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bu_list = BussinessListing::find($id);
        $profiles = DB::table('profiles')->get()->where('user_id',$bu_list->user->id);
        $categories = DB::table('categories')->get()->where('id',$bu_list->category_id);
        $tags = DB::table('tags')->get()->where('id',$bu_list->tag_id);

        return view('listing.show',compact('bu_list','profiles','tags','categories'));
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
