<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe\Charge;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripePaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function stripe(){
        return view('stripe');
    }

    /**
     * @param Request $request
     * @return void
     */
    public function stripePost(Request $request)
    {
      Stripe::setApiKey(env('STRIPE_SECRET'));
    $payment_confirm =  Charge::create([
         "amount" => 1200 * 100,
         "currency" => "INR",
         "source" => $request->stripeToken,
         "description" => "Test Payment From Global agra vaish Chamber"
      ]);

    if ($payment_confirm) {
        if (!empty(auth()->user()->id)) {
            if (auth()->user()->id) {
                $id = auth()->user()->id;
            }
        }
        $status_update = DB::table('member_ships')->where('user_id', $id)->update([
            'membership_status' => 'paid',
        ]);

    }
        if ($status_update)
            return redirect()->route('listing.create');
        else
            return $request->session()->flash('success','Some error Occurred');
    }
}
