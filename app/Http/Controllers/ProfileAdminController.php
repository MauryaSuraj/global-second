<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $Supporter_profiles = DB::table('member_ship_fronts')->where('user_id',$id)
            ->get()->first();
        $user_id = DB::table('member_ship_fronts')->where('id', $id)->pluck('user_id')->first();
        $listings = DB::table('bussiness_listings')->where('user_id', $user_id)->paginate(4);
        return view('profile.index', compact('Supporter_profiles', 'listings'));
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
        $Supporter_profiles = DB::table('member_ship_fronts')->where('user_id',$id)->get()->first();
        return view('profile.edit',compact('Supporter_profiles'));
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
        $request->validate([
            'name' => 'required',
            'fathername' => 'required',
            'address' => 'required',
            'pincode' => 'required',
            'fax' => 'required',
            'mobile' => 'required|numeric',
            'email' => 'required|email',
            'birthdate' => 'required|date',
            'image' => 'required|image',
            'caste' => 'required',
            'originaladdress' => 'required',
            'lokshabha' => 'required',
            'vidhansabha' => 'required',
            'panchayat' => 'required',
            'officename' => 'required',
            'officeaddress' => 'required',
            'category' => 'required',
            'celeb' => 'nullable',
        ]);

        if ($request->hasFile('image')){
            if ($request->file('image')->isValid()){
                $path = $request->image->store('profile');
            }
        }
        $mytime = Carbon::now();
        $mytime->toDateTimeString();
        $register =  DB::table('member_ship_fronts')->where('user_id', $id)
            ->update([
            'name' => $request->input('name'),
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
            'image' => $path,
            'updated_at' => $mytime,
        ]);
        if($register)
            return redirect()->back()->with('success', 'Profile Updated Successfully');

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
