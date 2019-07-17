<?php

namespace App\Http\Controllers;

use App\MatrimonyProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FrontEnd extends Controller
{
    public function index()
    {
        $matrimonials = MatrimonyProfile::all();
        $categories = DB::table('categories')->latest()->paginate(8);
        foreach ($categories as $category){
            $url_category_image = Storage::url($category->image);
        }
        $categorys = DB::table('categories')->get();
        $listings = DB::table('bussiness_listings')->where('status', '1')->latest()->paginate(4);
        return view('frontend.index',compact('categories','listings', 'url_category_image','categorys','matrimonials'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact ()
    {
        return view('frontend.contact');
    }

    public function supporter()
    {
        $Supporter_profiles = DB::table('supporters')
            ->join('member_ship_fronts','member_ship_fronts.id','=','supporters.profile_id')
            ->select('member_ship_fronts.*')
            ->paginate(12);
//        dd($Supporter_profiles);
        return view('frontend.supporter',compact('Supporter_profiles'));
    }

    public function matrimony($id){
        return $id;
    }

}
