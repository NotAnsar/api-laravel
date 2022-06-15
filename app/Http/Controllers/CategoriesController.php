<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;
class CategoriesController extends Controller
{
    public function index(){
        $categories=categorie::All();
        return $categories;
    }
}
