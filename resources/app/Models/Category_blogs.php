<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_blogs extends Model
{
    use HasFactory;

    protected $table = 'category_blogs';

    public function blogs()
    {
        return $this->belongsToMany(blog::class);
    }
}
