<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_category_blog extends Model
{
    use HasFactory;

    protected $table = 'Post_category_blog';

    protected $fillable = [
        'category_blogs_id',
        'category_blogs_id_2',
        'category_blogs_id_3',
        'post_id'
    ];

}
