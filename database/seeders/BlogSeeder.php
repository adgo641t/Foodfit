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
            'creator' => 'Pau',
            'image' => 'Arnolds.jpeg',

        ]);

        Post::create([
            'title' => 'Ciclismo como Deporte',
            'description' => 'Te hacemos un dto por ser guay',
            'category_id' => 3,
            'creator' => 'Adrian',
            'image' => 'ciclismo.jpg',

        ]);

        Post::create([
            'title' => 'Como la comida engorda',
            'description' => 'Te hacemos un dto por ser guay',
            'category_id' => 1,
            'creator' => 'Wintop',
            'image' => 'berengena.jpg',

        ]);
    }
}
