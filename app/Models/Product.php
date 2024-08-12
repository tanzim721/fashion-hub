<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'subtitle',
        'price',
        'description',
        'benefits',
        'details',
        'more_details',
    ];
    protected $casts = [
        'image' => 'array',
        'benefits' => 'array',
        'details' => 'array',
        'more_details' => 'array',
    ];
}
