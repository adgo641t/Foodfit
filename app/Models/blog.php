<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category_blogs;


class blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'description',
        'category_id',
        'creator',
        'image',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category_blogs::class);
    }

    public function scopeFilter($query, array $filters)
    {
        if($filters['category'] ?? false){
            $query->where('category_id', 'like', '%' . request('category') . '%');
            $query->where('category_id_2', 'like', '%' . request('category') . '%');
            $query->where('category_id_3', 'like', '%' . request('category') . '%');
        }

        if($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('creator', 'like', '%' . request('search') . '%')
            ->orWhere('created_at', 'like', '%' . request('search') . '%');
        }
    }
}
