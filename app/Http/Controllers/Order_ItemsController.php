<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order_item;



class Order_ItemsController extends Controller
{
    public function index1($id){
        $orders=order_item::find($id);
        return $orders;
    }

    public function index2(){
        $orders=order_item::All();
        return $orders;
    }

    function add(Request $req){
    //   try {
        $orders=new order_item;
        $orders->product_id=$req->product_id;
        $orders->order_id=$req->order_id;
        $orders->quantity=$req->quantity;

        $result=$orders->save();
        if($result) {
            return ["Result"=>"Data has been saved"];
        } else {
            return ["Result"=>"operation failed"];
        }
    //   } catch (\Throwable $th) {
        //   return ["Result"=>"operation failed"];
    //   }
    }
}