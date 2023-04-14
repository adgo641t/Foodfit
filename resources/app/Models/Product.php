<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'categories',
    ];

    public function scopeFilter($query, array $filters)
    {
        if($filters['category'] ?? false){
            $query->where('categories', 'like', '%' . request('category') . '%');
        }
        // If is not false then do what's in here
        if($filters['search'] ?? false){
            $query->where('name', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('price', 'like', '%' . request('search') . '%');
        }
    }
    
    
}
