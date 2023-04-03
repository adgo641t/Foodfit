<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Post::create([
            'title' => 'Que alimentos tienen las proteinas que necessitamos',
            'description' => 'TOdo lo que tenga Proteinas',
            'category_id' => 2,
            'category_id_2' => 1,
            'category_id_3' => 3,
            'creator' => 1,
            'image' => 'Arnolds.jpeg',

        ]);

        Post::create([
            'title' => 'Ciclismo como Deporte',
            'description' => 'Te hacemos un dto por ser guay',
            'category_id' => 3,
            'category_id_2' => 1,
            'category_id_3' => 4,
            'creator' => 2,
            'image' => 'ciclismo.jpg',

        ]);


    }
}
