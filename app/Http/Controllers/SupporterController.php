<?php

namespace App\Http\Controllers;

use App\MemberShipFront;
use App\SpecialCategory;
use App\Supporter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupporterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return "Hello";
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

        return view('support.create',compact('profiles', 'specialCategory'));
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
        ]);
        $result = Supporter::create($request->all());
        if ($result)
            return redirect()->back()->with('success', 'Profile Added to Supporter ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
         $url =  app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();
         if ($url == 'listing.show'){
             $Supporter_profiles = DB::table('member_ship_fronts')->where('id',$id)
                 ->get()->first();
         }else{
             $Supporter_profiles = DB::table('supporters')->where('supporters.id',$id)
                 ->join('member_ship_fronts','member_ship_fronts.id','=','supporters.profile_id')
                 ->select('member_ship_fronts.*')
                 ->get()->first();
         }
//         dd($Supporter_profiles->address);
        $user_id = DB::table('member_ship_fronts')->where('id', $id)->pluck('user_id')->first();
        $listings = DB::table('bussiness_listings')->where('user_id', $user_id)->paginate(4);
        return view('frontend.profile',compact('Supporter_profiles','listings'));
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
