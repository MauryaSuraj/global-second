<?php

namespace App\Http\Controllers;

use App\BussinessListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeaturedList extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featured_listings = \App\FeaturedList::all();
        return view('featuredlisting.index', compact('featured_listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listings = BussinessListing::where('status', '1')->get();
        return view('featuredlisting.create',compact('listings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\FeaturedList::create([
            'listing_id' => $request->input('listing_id'),
            'status' => 1,
            'days' => $request->input('days'),
        ]);
            return redirect()->back()->with('featured','Listing Added to Featured Listing for  '.$request->input('days'));
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
