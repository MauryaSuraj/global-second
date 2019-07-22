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
        $categories = DB::table('categories')->latest()->paginate(8);
        foreach ($categories as $category){
            $url_category_image = Storage::url($category->image);
        }
        $categorys = DB::table('categories')->get();
        $listings = DB::table('bussiness_listings')->where('status', '1')->latest()->paginate(4);
        //special category here
        //news
        $newses = DB::table('news')->latest()->paginate('4');
        //elite
        $elite_ag = DB::table('special_categories')->where('special_categories.special_category_name', '=','Elite Aggrawals')
            ->join('member_ship_fronts' , 'member_ship_fronts.id', '=', 'special_categories.profile_id')
            ->paginate(4);

        $great_pers = DB::table('special_categories')->where('special_categories.special_category_name', '=','Great Personality')
            ->join('member_ship_fronts' , 'member_ship_fronts.id', '=', 'special_categories.profile_id')
            ->paginate(4);
        $Shradhnajali = DB::table('special_categories')->where('special_categories.special_category_name', '=','Shradhnajali')
            ->join('member_ship_fronts' , 'member_ship_fronts.id', '=', 'special_categories.profile_id')
            ->paginate(4);
        $Education = DB::table('special_categories')->where('special_categories.special_category_name', '=','Education')
            ->join('member_ship_fronts' , 'member_ship_fronts.id', '=', 'special_categories.profile_id')
            ->paginate(4);

        // special category here
        //Matrimony Profiles
        $matrimonials = DB::table('matrimony_profiles')->get()->take(4);
        return view('frontend.index',compact('categories','listings', 'url_category_image','categorys','matrimonials','newses','great_pers','Shradhnajali','Education','elite_ag'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact ()
    {
        return view('frontend.contact');
    }

    public function supporter(Request $request)
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
