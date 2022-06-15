<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
class jointure extends Controller
{
    function join(Request $request){
        $orders=order::with(['user','order'])
        ->join('user as u', 'u.user_id', '=', 'orders.user_id');
        
        if($request->user_id){   
            $orders->where('u.user_id',$request->user_id);
        };
        
     return $orders->get();
       
    }
    
}