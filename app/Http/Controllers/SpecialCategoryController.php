<?php

namespace App\Http\Controllers;

use App\MemberShipFront;
use App\SpecialCategory;
use Illuminate\Http\Request;

class SpecialCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialCategory = SpecialCategory::all();
        return view('specialCategory.index', compact('specialCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profiles = MemberShipFront::all();
        $specialCategory = SpecialCategory::all();

        return view('specialCategory.create', compact('specialCategory','profiles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'profile_id' => 'required',
           'user_id' => 'required',
           'special_category_name' => 'required',
            'comment' => 'required',
        ]);
        $result = SpecialCategory::create($request->all());
        if ($result)
            return redirect()->back()->with('success', 'Profile Added to');
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
