<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;
class CategorieController extends Controller
{
    public function index($id){
        $categorie=categorie::find($id);
        return $categorie;
    }
}
