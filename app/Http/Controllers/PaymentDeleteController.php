<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment;
class PaymentDeleteController extends Controller
{
    function delete($id){
        $payment=payment::find($id);
        $result=$payment->delete();
        if($result){
            return ["result"=>"record has been deleted"];

        }
        else{
            return ["result"=>"delete opreration has failed"];
        }
    }
}
