<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'description',
        'category',
        'image',
    ];

    public function blogs()
    {
        return $this->hasMany(blog::class);
    }

    public function scopeFilter($query, array $filters)
    {
        if($filters['category'] ?? false){
            $query->where('category_blogs', 'like', '%' . request('category') . '%');
        }
        // If is not false then do what's in here
        if($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('creator', 'like', '%' . request('search') . '%');
        }
    }
}
