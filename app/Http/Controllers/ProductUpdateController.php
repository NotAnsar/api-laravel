<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductUpdateController extends Controller
{
  
    function update(Request $request){
        $product=adresse::find($request->id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $adresse->stock = $request->stock;
        $adresse->image = $request->image;
        $adresse->categorie_id = $request->categorie_id;
        $adresse->brand_id = $request->brand_id;

        $result=$product->save();
        if($result){
            return ["result"=>"record has been updated"];

        }
        else{
            return ["result"=>"update opreration has failed"];
        }
    }
}
