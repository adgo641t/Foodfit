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

    public function scopeFilter($query, array $filters)
    {
        // If is not false then do what's in here
        if($filters['search'] ?? false){
            $query->where('name_user', 'like', '%' . request('search') . '%')
            ->orWhere('created_at', 'like', '%' . request('search') . '%')
            ->orWhere('adress', 'like', '%' . request('search') . '%');
        }
    }
}
