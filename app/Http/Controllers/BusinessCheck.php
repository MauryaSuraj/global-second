<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessCheck extends Controller
{
    public function test(Request $request){

        if ($request->has('country') && $request->country != ''){
           echo $country = $request->country;
        }
        if ($request->has('year') && $request->year != ''){
           echo $year = $request->year;
        }
        if ($request->has('month') && $request->month != ''){
           echo $month = $request->month;
        }
        if ($request->has('official') && $request->official != ''){
            echo $official =  $request->official;
        }
    }
}
