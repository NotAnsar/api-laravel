<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment;
class PaymentController extends Controller
{
    public function index($id){
        $payment=payment::find($id);
        return $payment;
    }
}
