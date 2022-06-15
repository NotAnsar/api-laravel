<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
class BrandController extends Controller
{
    public function index($id){
        $brand=brand::find($id);
        return $brand;
    }
}
