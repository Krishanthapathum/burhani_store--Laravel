<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Add the fields that are mass assignable
    protected $fillable = [
        'item_name',
        'description',
        'price',
        'availability',
        'image_filename',
    ];
}
