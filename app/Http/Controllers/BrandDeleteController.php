<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
class BrandDeleteController extends Controller
{
    function delete($id){
        $brand=brand::find($id);
        $result=$brand->delete();
        if($result){
            return ["result"=>"record has been deleted"];

        }
        else{
            return ["result"=>"delete opreration has failed"];
        }
    }
}
