<?php

namespace App\Http\Controllers;

use App\BussinessListing;
use App\Category;
use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BusinessListingAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = BussinessListing::all();
        return view('businesslisting.index', compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        $tags = Tags::all();

        return view('businesslisting.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $data = $request->validate([
            'category_id' => 'required',
            'tag_id' =>'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'video' => 'url',
        ]);
     \auth()->user()->listings()->create($data);
        return redirect()->route('businesslisting.index')->with('success','Listing Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);
//        $bu_list = BussinessListing::whereIn('id',$id);
        $bu_list = BussinessListing::find($id);
        return view('businesslisting.show',compact('bu_list'));
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
