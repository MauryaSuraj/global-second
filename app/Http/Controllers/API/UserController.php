<?php

namespace App\Http\Controllers\API;

use App\MemberShip;
use App\MemberShipFront;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public $successStatus = 200;
    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('GlobalAgraVaishChamber')-> accessToken;
            return response()->json(['success' => $success], $this-> successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $userId = $user->id;
        MemberShip::create([
            'user_id' => $userId,
        ]);
        MemberShipFront::create([
            'user_id' => $userId,
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('phone'),
        ]);
        $success['token'] =  $user->createToken('GlobalAgraVaishChamber')-> accessToken;
        $success['name'] =  $user->name;
        return response()->json(['success'=>$success], $this-> successStatus);
    }
//
//   public function logout(){
//        if (Auth::check()){
//            Auth::user()->AauthAcessToken()->delete();
//        }
//   }
}
