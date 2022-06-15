<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adresse;
class AdresseUpdateController extends Controller
{
    function update(Request $request){
        $adresse=adresse::find($request->user_id);
        $adresse->telephone = $request->telephone;
        $adresse->adresse = $request->adresse;
        $adresse->zipCode = $request->zipCode;
        $adresse->ville = $request->ville;

        $result=$adresse->save();
        if($result){
            return ["result"=>"record has been updated"];

        }
        else{
            return ["result"=>"update opreration has failed"];
        }
    }
}