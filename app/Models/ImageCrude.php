<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageCrude extends Model
{
    use HasFactory;
    protected $table = 'image_crudes';
    protected $fillable = [
        'title',
        'images',
    ];
}