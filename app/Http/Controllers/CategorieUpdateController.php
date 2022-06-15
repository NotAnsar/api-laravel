<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;
class CategorieUpdateController extends Controller
{
    function update(Request $request){
        $categorie=categorie::find($request->categorie_id);
        $categorie->categorie= $request->categorie;
      
        $result=$categorie->save();
        if($result){
            return ["result"=>"record has been updated"];

        }
        else{
            return ["result"=>"update opreration has failed"];
        }
    }
}