<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_item extends Model
{
    use HasFactory;
    protected $table='order_items';
    protected $primaryKey = 'order_id';
    public $timestamps=false;

    public function order_item(){
        return $this->belongsTo(order_item::class);
        }
 public function product(){
         return $this->belongsTo(product::class);
         }
}