<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MemberShipFrontController extends Controller
{
    /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('membershipdetail.index');
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
        return view('membershipdetail.create',compact('categories','tags'));
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
            'firstname' => 'required',
            'lastname' => 'required',
            'fathername' => 'required',
            'address' => 'required',
            'pincode' => 'required',
            'fax' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'birthdate' => 'required',
            'image' => 'required',
            'caste' => 'required',
            'originaladdress' => 'required',
            'lokshabha' => 'required',
            'vidhansabha' => 'required',
            'panchayat' => 'required',
            'officename' => 'required',
            'officeaddress' => 'required',
            'category' => 'required',
            'celeb' => 'nullable',
             'image' => 'required',
        ]);

        DB::table('member_ship_fronts')->insert([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'address' => $request->input('address'),
            'pincode' => $request->input('pincode'),
            'fax' => $request->input('fax'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
            'birthdate' => $request->input('birthdate'),
            'caste' => $request->input('caste'),
            'originalplace' => $request->input('originaladdress'),
            'loksabha' => $request->input('lokshabha'),
            'vidhansabha' => $request->input('vidhansabha'),
            'panchayat' => $request->input('panchayat'),
            'businessname' => $request->input('officename'),
            'officeaddress' => $request->input('officeaddress'),
            'category_id' => $request->input('category'),
            'celebrity' => $request->input('celeb'),
            'image' => $request->input('image'),
            'created_at' => ,
            'updated_at' => ,


        ]);
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
