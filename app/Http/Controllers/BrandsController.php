<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
class BrandsController extends Controller
{
    public function index(){
        $brands=brand::All();
        return $brands;
    }
}
