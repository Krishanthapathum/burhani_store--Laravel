<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_code',
        'item_name',
        'description',
        'price',
        'availability',
        'image_filename',
        'category',
    ];
}
