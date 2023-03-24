<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $table = 'bills_products';

    protected $fillable = [
        'name', 'quantity', 'price','totalprice'
    ];

    protected $hidden = [
        'name', 'quantity', 'price','totalprice'
    ];
}
