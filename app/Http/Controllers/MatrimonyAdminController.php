<?php

namespace App\Http\Controllers;

use App\MatrimonyProfile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatrimonyAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $matri_profiles =   MatrimonyProfile::all();
        return view('matrimony.index', compact('matri_profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matrimony.create');
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
            'profilefor' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'complexion' => 'required',
            'marital' => 'required',
            'date_of_birth' => 'required',
            'religion' => 'required',
            'moon' => 'required',
            'mother_toungue' => 'required',
            'salary' => 'required',
            'mobile_no' => 'required',
            'email' => 'required',
            'age' => 'required',
            'height' => 'required',
            'sun' => 'required',
            'education' => 'required',
            'location' => 'required',
            'profession' =>'required',
            'family' => 'required',
            'partner' => 'required'
        ]);

        $dt = Carbon::now();
        $dt->toDateString();

        $success = DB::table('matrimony_profiles')->insert([
            'profile_for' => $request->input('profilefor'),
            'name' => $request->input('name'),
            'gender' => $request->input('gender'),
            'date_of_birth' => $request->input('date_of_birth'),
            'religion' => $request->input('religion'),
            'mother_toungue' => $request->input('mother_toungue'),
            'mobile_no' => $request->input('mobile_no'),
            'email' => $request->input('email'),
            'age' => $request->input('age'),
            'height' => $request->input('height'),
            'complexion' => $request->input('complexion'),
            'education' => $request->input('education'),
            'location' => $request->input('location'),
            'profession' => $request->input('profession'),
            'marital_status' => $request->input('marital'),
            'salary' => $request->input('salary'),
            'sun_sign' => $request->input('sun'),
            'moon_sign' => $request->input('moon'),
            'family_bg' => $request->input('family'),
            'partner_expectation' => $request->input('partner'),
            'created_at' => $dt,
            'updated_at' => $dt
        ]);
        if ($success)
            return view('matrimony.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('matrimony.show');
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
