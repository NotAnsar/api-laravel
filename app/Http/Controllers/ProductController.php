<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index($id){
        $product=product::find($id);
        return $product;
    }
}
