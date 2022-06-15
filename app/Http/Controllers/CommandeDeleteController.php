<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commande;
class CommandeDeleteController extends Controller
{
    function delete($id){
        $commande=commande::find($id);
        $result=$commande->delete();
        if($result){
            return ["result"=>"record has been deleted"];

        }
        else{
            return ["result"=>"delete opreration has failed"];
        }
    }
}
