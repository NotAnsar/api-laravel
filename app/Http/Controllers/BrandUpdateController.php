<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
class BrandUpdateController extends Controller
{
    function update(Request $request){
        $brand=brand::find($request->brand_id);
        $brand->brand = $request->brand;
        $result=$brand->save();
        if($result){
            return ["result"=>"record has been updated"];

        }
        else{
            return ["result"=>"update opreration has failed"];
        }
    }
}