<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commande;
class CommandesController extends Controller
{
    public function index(){
        $commandes=commande::All();
        return $commandes;
    }
}
