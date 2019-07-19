<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newses = DB::table('news')->latest()
            ->paginate('8');
        return view('news.index',compact('newses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
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
           'editor1' => 'required',
           'mainimage' => 'required|image',
           'thumbimage' => 'required|image',
        ]);


        if ($request->hasFile('mainimage')){
            if ($request->file('mainimage')->isValid()){
                $mainimage = time().'.'.request()->mainimage->getClientOriginalExtension();
                request()->mainimage->move(public_path('images/news'), $mainimage);
            }
        }
        if ($request->hasFile('thumbimage')){
            if ($request->file('thumbimage')->isValid()){
                $thumbimage = time().'.'.request()->thumbimage->getClientOriginalExtension();
                request()->thumbimage->move(public_path('images/news/thumb'), $thumbimage);
            }
        }

        $result = DB::table('news')
            ->insert([
                'name' => $request->input('title'),
                'details' => $request->input('editor1'),
                'image' => $mainimage,
                'thumbnail' => $thumbimage,
                'slug' => Str::slug($request->input('title'), '-'),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]);
        if ($result)
            return redirect()->back()->with('success', 'News Is created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recent_news = DB::table('news')->get()->sortByDesc('created_at')->take(10);
        $news = DB::table('news')->where('slug', $id)->get()->first();
        return view('news.show',compact('news','recent_news'));
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
