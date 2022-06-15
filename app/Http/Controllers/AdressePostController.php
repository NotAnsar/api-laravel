<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adresse;

class AdressePostController extends Controller
{
    function add(Request $req){
        $adresse=new adresse;
      
        $adresse->user_id=$req->user_id;
        $adresse->telephone=$req->telephone;
        $adresse->adresse=$req->adresse;
        $adresse->zipCode=$req->zipCode;
        $adresse->ville=$req->ville;
       
        $result=$adresse->save();
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
