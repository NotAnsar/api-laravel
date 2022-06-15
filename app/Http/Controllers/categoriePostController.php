<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;
class categoriePostController extends Controller
{
    function add(Request $req){
        $categorie=new categorie;
        $categorie->categorie_id=$req->categorie_id;
        $categorie->categorie=$req->categorie;
        

        $result=$categorie->save();
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
