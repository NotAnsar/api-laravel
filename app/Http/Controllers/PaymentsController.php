<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment;
class PaymentsController extends Controller
{
    public function index(){
        $payments=payment::All();
        return $payments;
    }
}
