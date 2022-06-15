<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order_item;
class jointureItem extends Controller
{
    function join(Request $request){
        $orders=order_item::with(['product','order_item'])
        ->join('product as p', 'p.product_id', '=', 'order_items.product_id');
        
        if($request->product_id){
           $orders->where('p.product_id',$request->product_id);
        };
        if($request->order_id){
           $orders->where('order_items.order_id',$request->order_id);
        };
     return $orders->get();
       
    }
}