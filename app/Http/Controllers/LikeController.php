<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LikeController extends Controller
{

    public function like(Request $request){
        //check for logged in user is already liked or dislike
        $user_id = null;

        if (!empty(auth()->user()->id)) {
            $user_id = auth()->user()->id;
        }
        $check = DB::table('like')->where('user_id', $user_id)->count();
        if ($check > 0){
            $like_dislike_test = DB::table('like')->where('user_id', $user_id)->pluck('like_dislike')->first();
            if ($like_dislike_test == 1){
                return redirect()->back()->with('success_like', 'You have already liked  It');
            }elseif ($like_dislike_test == 2){
                return redirect()->back()->with('success_like', 'You have already Disliked  It');
            }
        }else{
            $like = DB::table('like')->insert([
                'like_dislike' => 1,
                'user_id' => $user_id,
                'listing_id' => $request->listing_id,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
            if ($like)
                return redirect()->back()->with('success_like', 'You Liked It');
        }
    }

    public function dislike(Request $request){
        $user_id = null;
        if (!empty(auth()->user()->id)) {
            $user_id = auth()->user()->id;
        }
        $check = DB::table('like')->where('user_id', $user_id)->count();
        if ($check > 0 ){
            $like_dislike_test = DB::table('like')->where('user_id', $user_id)->pluck('like_dislike')->first();
            if ($like_dislike_test == 1){
                return redirect()->back()->with('success_like', 'You have already liked  It');
            }elseif ($like_dislike_test == 2){
                return redirect()->back()->with('success_like', 'You have already Disliked  It');
            }
        }
        else{
            $dislike = DB::table('like')
                ->insert([
                    'user_id' => $user_id,
                    'like_dislike' => 2,
                    'listing_id' => $request->listing_id,
                    'created_at' => Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon::now()->toDateTimeString(),
                ]);
            if ($dislike)
                return redirect()->back()->with('success_like','You disliked It');
        }
    }
}
