<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adresse;
class AdresseController extends Controller
{
    public function index($id){
        $adresse=adresse::find($id);
        return $adresse;
    }
    
}
