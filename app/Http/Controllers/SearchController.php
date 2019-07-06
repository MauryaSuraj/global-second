<?php

namespace App\Http\Controllers;

use App\BussinessListing;
use App\Category;
use App\Tags;
use Illuminate\Http\Request;

class SearchController extends Controller
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
        $categories = Category::all();
        $tags = Tags::all();

        $request->validate([
            'category_id' => 'required',
            'query' => 'required',
        ]);
        $category_id = $request->input('category_id');
        if ($category_id == null){
            $category_id = '';
        }

        $query = $request->input('query');
        if ($query == null)
        {
            $query ='';
        }
        $results = BussinessListing::where('name', 'LIKE','%'.$query.'%')
            ->orWhere('category_id', $category_id)
            ->orWhere('description', 'LIKE','%'.$query.'%')
            ->paginate(15);
        $listings = $results;

        return view('search.search',compact('categories','listings','tags', 'query'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();
        $tags = Tags::all();
        $results = BussinessListing::where('category_id', $id)
            ->paginate(15);
        $listings = $results;
        $query ='';
        return view('search.search',compact('categories','listings','tags', 'query'));
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
