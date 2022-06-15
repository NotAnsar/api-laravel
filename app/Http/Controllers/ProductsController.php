<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductsController extends Controller
{
    public function index(){
        $products=product::All();
        return $products;
    }

    public function index2(){
        $products=product::query()->paginate(6);
        return $products;
    }


   
    public function index3(Request $request){
        $products = new product();
        if($request->sortBy && in_array($request->sortBy,['name','price'])){
                $sortBy=$request->sortBy;
        }
        else{
            $sortBy='product_id';
        }
        if($request->sortorder && in_array($request->sortorder,['asc','desc'])){
                $sortorder=$request->sortorder;
        } 
        else{
            $sortorder='asc';
        }
    
        $products = $products->orderBy($sortBy,$sortorder)->paginate(6);
    
        return $products;
    }
    
    


    public function index4(Request $request){
      
    $products=product::with(['brand','categorie']);

     if($request->keyword){
             $products->where('name','LIKE','%'.$request->keyword.'%');      
     };
    if($request->categorie_id){   
            $products->where('categorie_id',$request->categorie_id);
     };
       
    if($request->brand_id){
            $products->where('brand_id',$request->brand_id);
    };

              $productesfiltered=$products->paginate(6);            
              
                     return $productesfiltered;
    

   }
   
   public function index5(Request $request){
      
    $products = new product();
    

    if($request->keyword){
        $products->where('name','LIKE','%'.$request->keyword.'%');      
    };

    if($request->categorie_id){
        $products->where('categorie_id',$request->categorie_id);
     };
       
    if($request->brand_id){
        $products->where('brand_id',$request->brand_id);
    };


    if($request->sortBy && in_array($request->sortBy,['name','price'])){
        $sortBy=$request->sortBy;
    }
    else{
        $sortBy='product_id';
    }
    if($request->sortorder && in_array($request->sortorder,['asc','desc'])){
            $sortorder=$request->sortorder;
    } 
    else{
        $sortorder='asc';
    }
    
    $products = $products->orderBy($sortBy,$sortorder)->paginate(6);

    return $products;
   }
   

   /* public function index5(Request $request){
      
    $products=product::with(['brand']);
    
     if($request->brand_id){
             $products->where('brand_id',$request->brand_id);
      };
      $productesfiltered=$products->paginate(6);            
              return $productesfiltered;
     

    } */



/* 
    public function index6(Request $request){
      
        $products=product::with(['categorie']);
     
            
         if($request->categorie_id){
                 $products->where('categorie_id',$request->categorie_id);
          };


          $productesfiltered=$products->paginate(6);           
          return $productesfiltered;
         
    
        } */







}