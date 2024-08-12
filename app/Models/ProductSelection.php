<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSelection extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'color', 'size', 'quantity'];
}
