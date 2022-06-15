<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;



class OrderController extends Controller
{
    public function index1($id){
        $orders=order::find($id);
        return $orders;
    }

    public function index2(){
        $orders=order::All();
        return $orders;
    }

    function add(Request $req){
        try {
            $orders=new order;
      
            $orders->order_id=$req->order_id;
            $orders->user_id=$req->user_id;
            $orders->created_at=$req->created_at;
            
            $result=$orders->save();
            
            if($result) {
                return ["id"=>$orders->order_id];
            }
            else {
                return ["Result"=>"operation failed"];
            }    
        } catch (\Throwable $th) {
            return ["Result"=>"operation failed"];
        }
        
    }
}