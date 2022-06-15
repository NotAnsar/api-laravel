<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment;

class PaymentPostController extends Controller
{
   function add(Request $req){
        $payment=new payment;
        $payment->payment_id=$req->payment_id;
        $payment->user_id=$req->user_id;
        $payment->numCard=$req->numCard;
        $payment->expyear=$req->expyear;
        $payment->expmonth=$req->expmonth;
        $payment->cvc=$req->cvc;
        $payment->nameOnCard=$req->nameOnCard;

        $result=$payment->save();
        if($result)
        {
            return ["Result"=>"Data has been saved"];
            echo"$result";
        }
        else
        {
            return ["Result"=>"operation failed"];
        }
        
            }
}
