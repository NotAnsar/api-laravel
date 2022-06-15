<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
class BrandPostController extends Controller
{
    
    function add(Request $req){
        $brand=new brand;
        $brand->brand_id=$req->brand_id;
        $brand->brand=$req->brand;
        

        $result=$brand->save();
        if($result)
        {
            return ["Result"=>"Data has been saved"];
        }
        else
        {
            return ["Result"=>"operation failed"];
        }
        
            }
}