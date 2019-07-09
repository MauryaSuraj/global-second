<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatriController extends Controller
{
    public function show($id){
        $matrimony = DB::table('matrimony_profiles')->where('id', $id)->get();
        return view('matrimony.matri', compact('matrimony'));
    }
}
