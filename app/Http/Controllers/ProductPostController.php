<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductPostController extends Controller
{
    function add(Request $req){
        $product=new product;
        $product->name=$req->name;
        $product->price=$req->price;
        $product->description=$req->description;
        $product->stock=$req->stock;
        $product->image=$req->image;
        $product->categorie_id=$req->categorie_id;
       $product->brand_id=$req->brand_id;

        $result=$product->save();
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
