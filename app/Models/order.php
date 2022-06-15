<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $primaryKey = 'order_id';
    public $timestamps=false;

    public function user(){
        return $this->belongsTo(user::class);
    }
    
    public function order(){
         return $this->belongsTo(order::class);
    }

}