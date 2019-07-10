<?php

namespace App\Http\Controllers;

use App\BussinessListing;
use App\Category;
use App\Profile;
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
       $request->validate([
            'category_id' => 'required',
            'tag_id' =>'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'video' => 'url',
            'image' => 'required|image|max:3072',
           'area' => 'required',
           'pincode' => 'required',
           'address' => 'required',
           'city' => 'required'

        ]);
       if ($request->hasFile('image')){
           if ($request->file('image')->isValid()){
               $imageName = time().'.'.request()->image->getClientOriginalExtension();
               request()->image->move(public_path('images/listing'), $imageName);
           }
       }
       $form_data = array(
         'category_id' => $request->category_id,
         'tag_id' => $request->tag_id,
         'name' => $request->name,
         'description' => $request->description,
          'price' => $request->price,
          'opening_time' => $request->opening_time,
          'closing_time' => $request->closing_time,
          'video' => $request->video,
          'image' => $imageName
       );
      $listing_id =   \auth()->user()->listings()->create($form_data);

      $address = DB::table('locations')->insert([
         'listing_id' => $listing_id->id,
          'address' => $request->input('address'),
          'area' => $request->input('area'),
          'city' => $request->input('city'),
          'pincode'=> $request->input('pincode')
      ]);
      if ($address)

          $user_id =  \auth()->user()->id;
        $verify =  DB::table('users')->where('id',$user_id)->pluck('user_role')->first();
//          dd($verify);
        if (!($verify == 'admin')){
            return redirect()->back()->with('success','ListingOLD Added SuccessFully');
        }
        else{
            return redirect()->route('businesslisting.index')->with('success','ListingOLD Created Successfully');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bu_list = BussinessListing::find($id);
        $profiles = DB::table('profiles')->get()->where('user_id',$bu_list->user->id);
        $locations = DB::table('locations')->get()->where('listing_id', $id);
        return view('businesslisting.show',compact('bu_list','profiles','locations'));
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
        $message ='NoThing Happens';
        $get_status = DB::table('bussiness_listings')
            ->where('id', $id)
            ->pluck('status')
            ->first();
        if ($get_status == 0 ){
            //not active
            $update = DB::table('bussiness_listings')
                ->where('id',$id)
                ->update([
                   'status' => 1
                ]);
            if ($update)
            { $message = "Activated "; }
        }else
        {
            //active here
            $update = DB::table('bussiness_listings')
                ->where('id',$id)
                ->update([
                    'status' => 0
                ]);
            if ($update)
            { $message = "DeActivated "; }

        }

        return redirect()->back()->with('success',$message);
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
