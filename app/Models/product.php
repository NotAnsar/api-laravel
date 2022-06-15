<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
   protected  $table='product';
    public $timestamps=false;
    protected $primaryKey = 'product_id';


     public function brand(){
            return $this->belongsTo(brand::class);
            }
     public function categorie(){
             return $this->belongsTo(categorie::class);
             }

  }