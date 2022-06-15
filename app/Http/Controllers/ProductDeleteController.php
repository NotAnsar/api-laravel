<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductDeleteController extends Controller
{
    function delete($id){
        $product=product::find($id);
        $result=$product->delete();
        if($result){
            return ["result"=>"record has been deleted"];

        }
        else{
            return ["result"=>"delete opreration has failed"];
        }
    }
}
