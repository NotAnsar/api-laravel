<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adresse;
class AdressesController extends Controller
{
    public function index(){
        $adresses=adresse::All();
        return $adresses;
    }
}
