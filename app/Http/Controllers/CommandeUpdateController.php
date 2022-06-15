<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commande;
class CommandeUpdateController extends Controller
{
    function update(Request $request){
        $commande=commande::find($request->id);
        $commande->user_id= $request->user_id;
        $commande->product_id = $request->product_id;
        $commande->quantity= $request->quantity;
        

        $result=$commande->save();
        if($result){
            return ["result"=>"record has been updated"];

        }
        else{
            return ["result"=>"update opreration has failed"];
        }
    }
}
