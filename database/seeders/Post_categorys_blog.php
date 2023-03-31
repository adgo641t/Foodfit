<?php

namespace Database\Seeders;

use App\Models\Post_category_blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Post_categorys_blog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post_category_blog::create([
            'category_blogs_id' => 2,
            'category_blogs_id_2' => 1,
            'category_blogs_id_3' => 3,
            'post_id' => 1
        ]);

        Post_category_blog::create([
            'category_blogs_id' => 3,
            'category_blogs_id_2' => 1,
            'category_blogs_id_3' => 3,
            'post_id' => 2
        ]);
    }
}
