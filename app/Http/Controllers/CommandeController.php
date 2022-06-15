<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commande;
class CommandeController extends Controller
{
    public function index($id){
        $commande=commande::find($id);
        return $commande;
    }
}

