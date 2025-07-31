<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'table_product';

    protected $fillable = [
        'name',
        'price',
        'quantity',
        'image',
    ];

    public $timestamps = true;
    protected $casts = [
        'price' => 'decimal:2',
        'quantity' => 'integer',
    ];
}
