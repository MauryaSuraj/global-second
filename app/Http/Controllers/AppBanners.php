<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppBanners extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = DB::table('app_banners')
            ->orderByDesc('created_at')
            ->get();
        return view('AppBanners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AppBanners.create');
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
           'title' => 'required',
           'image' => ['required', 'image', 'max:2048'],
        ]);
        if ($request->hasFile('image')){
            if ($request->file('image')->isValid()){
                $image_name = time().'.'.\request()->image->getClientOriginalExtension();
                \request()->image->move(public_path('images/appBanners'), $image_name);
            }
        }

        $result = DB::table('app_banners')
            ->insert([
                'title' => $request->input('title'),
                'image' => $image_name,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]);
        if ($result)
            return redirect()->back()->with('success', 'Banner added');
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
        $check_status = DB::table('app_banners')->where('id', $id)
            ->pluck('status')->first();
        if ($check_status == 0 ){
              DB::table('app_banners')->where('id', $id)
                ->update([
                    'status' => 1
                ]);
            return redirect()->back()->with('success', 'Activated');
        }
        elseif ($check_status == 1){
            DB::table('app_banners')
                ->where('id', $id)
                ->update([
                   'status' => 0
                ]);
            return redirect()->back()->with('success', 'Deactivated');
        }
        return redirect()->back();
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
