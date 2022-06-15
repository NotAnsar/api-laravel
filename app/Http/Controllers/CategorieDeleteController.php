<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;
class CategorieDeleteController extends Controller
{
    function delete($id){
        $categorie=categorie::find($id);
        $result=$categorie->delete();
        if($result){
            return ["result"=>"record has been deleted"];

        }
        else{
            return ["result"=>"delete opreration has failed"];
        }
    }
}
