<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\ContactFormListing;
use App\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ListSet extends Controller
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
