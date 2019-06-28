<?php

namespace App\Http\Controllers;

use App\BussinessListing;
use App\Category;
use App\Reviews;
use App\Tags;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $bu_list = BussinessListing::find($request->input('listing_id'));
        $profiles = DB::table('profiles')->get()->where('user_id',$bu_list->user->id);
        $categories = DB::table('categories')->get()->where('id',$bu_list->category_id);
        $tags = DB::table('tags')->get()->where('id',$bu_list->tag_id);
        $reviews = DB::table('reviews')->insert([
           'user_id' => \auth()->user()->id,
            'rating' => '5',
            'listing_id' => $request->input('listing_id'),
            'description' => $request->input('description'),
            'image' => 'some image path'
        ]);
        if ($reviews)
            $msgs = 'Review Submitted Successfully';
        else
            $msgs ='';
      return view('listing.show',compact('bu_list','categories','tags','profiles','msgs'))->with('success', 'Review submitted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
