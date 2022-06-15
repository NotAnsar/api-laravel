<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commande;

class CommandePostController extends Controller
{
    function add(Request $req){
        $commande=new commande;
        $commande->commande_id=$req->commande_id;
        $commande->user_id=$req->user_id;
        $commande->product_id=$req->product_id;
        $commande->quantity=$req->quantity;
        $commande->created_at=$req->created_at;
        $commande->updated_at=$req->updated_at;
        

        $result=$commande->save();
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
