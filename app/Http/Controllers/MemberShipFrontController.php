<?php

namespace App\Http\Controllers;

use App\Category;
use App\MemberShipFront;
use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user()->email;
        $memberdetails = DB::table('member_ship_fronts')->where('email', $user)->get();

        $id = DB::table('member_ship_fronts')->where('email', $user)->value('user_id');
        $familyDetails = DB::table('family_member')->where('membership_id',$id)->get();
        return view('membershipdetail.index',compact('memberdetails','familyDetails'));
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

      $register =  DB::table('member_ship_fronts')->insert([
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
            'created_at' => $mytime,
            'updated_at' => $mytime,
        ]);
      if($register)
      return redirect('membershipdetail.index');
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
        $categories = Category::all();
        $tags = Tags::all();
        $profiledetails = MemberShipFront::where('id', $id)->get();
        return view('membershipdetail.edit', compact('profiledetails', 'categories','tags'));
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
            'fathername' => 'required',
            'address' => 'required',
            'pincode' => 'required',
            'fax' => 'required',
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

        $register =  DB::table('member_ship_fronts')->where('id',$id)->update([
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
            'created_at' => $mytime,
            'updated_at' => $mytime,
        ]);
        if($register)
            return view('membershipdetail.index');
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
