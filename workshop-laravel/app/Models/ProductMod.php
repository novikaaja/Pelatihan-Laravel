<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMod extends Model
{
    use HasFactory;
    protected $table = 'product_models';
    protected $guarded = ['id'];
}
