<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adresse;
class AdresseDeleteController extends Controller
{
    function delete($id){
        $adresse=adresse::find($id);
        $result=$adresse->delete();
        if($result){
            return ["result"=>"record has been deleted"];

        }
        else{
            return ["result"=>"delete opreration has failed"];
        }
    }
}
