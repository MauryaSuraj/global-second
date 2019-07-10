<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\ContactFormListing;
use App\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ListingOLD extends Controller
{
    public $successStatus = 200;

    public function category()
    {
        $categories = Category::all();
        return response()->json(['success' => $categories], $this->successStatus);
    }

    public function tags()
    {
        $tags = Tags::all();
        return response()->json(['success' => $tags], $this->successStatus);
    }

    public function listing()
    {
        $listings = DB::table('bussiness_listings')
            ->join('categories', 'bussiness_listings.category_id', '=', 'categories.id')
            ->join('tags', 'bussiness_listings.tag_id', '=', 'tags.id')
            ->join('users', 'bussiness_listings.user_id', '=', 'users.id')
            ->join('locations', 'locations.listing_id', '=', 'bussiness_listings.id')
            ->select('bussiness_listings.*', 'categories.name as category_name', 'tags.name as tag_name', 'users.name as user_name', 'users.email as user_email', 'users.phone as phone', 'locations.address', 'locations.city', 'locations.area', 'locations.pincode')
            ->get();
        return response()->json(['success' => $listings], $this->successStatus);
    }

    //listing enquiry here
    public function listingEnquiry(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bussiness_listing_id' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phone' => 'required',
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $users = ContactFormListing::create($input);
        $user = Auth::user();
        $success['token'] = $user->createToken('GlobalAgraVaishChamber')->accessToken;
        return response()->json(['success' => $users], $this->successStatus);
    }
}
