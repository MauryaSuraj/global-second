<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusinesslistingProfileController extends Controller
{
    public function index(){
        $user_id = auth()->user()->id;

        $listings = DB::table('bussiness_listings')
            ->where('user_id',$user_id)
            ->get();
        return view('listing.listshow', compact('listings'));
    }

    public function enquiry(){
        if (!empty(auth()->user()->id)){
            $id = auth()->user()->id;
        }

        $listing_details = DB::table('bussiness_listings')
            ->where('user_id', $id)
            ->pluck('id')->all();
        foreach ($listing_details as $listing_detail){
                    $enquiry_table_data = DB::table('contact_form_listings')
                        ->where('bussiness_listing_id',$listing_detail)
                        ->get();
            return view('membershipdetail.enquiry', compact('enquiry_table_data'));
        }


    }

}
