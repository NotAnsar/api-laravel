<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment;
class PaymentUpdateController extends Controller
{
    function update(Request $request){
        $payment=payment::find($request->id);
        $payment->user_id = $request->user_id;
        $payment->numCard = $request->numCard;
        $payment->expyear = $request->expyear;
        $payment->expmonth = $request->expmonth;
        $payment->cvc = $request->cvc;
        $payment->nameOnCard = $request->nameOnCard;

        $result=$payment->save();
        if($result){
            return ["result"=>"record has been updated"];

        }
        else{
            return ["result"=>"update opreration has failed"];
        }
    }
}
