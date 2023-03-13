<?php

namespace Database\Seeders;
use App\Models\Blog;
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
        
        Blog::create([
            'title' => 'Que alimentos tienen las proteinas que necessitamos',
            'description' => 'TOdo lo que tenga Proteinas',
            'category' => 'Guay',

        ]);

        Blog::create([
            'title' => 'Ciclismo como Deporte',
            'description' => 'Te hacemos un dto por ser guay',
            'category' => 'Deporte',
        ]);

        Blog::create([
            'title' => 'Una manuela al dia alegra el dia',
            'description' => 'Te hacemos un dto por ser guay',
            'category' => 'Salud',
        ]);

        Blog::create([
            'title' => 'Como la comida engorda',
            'description' => 'Te hacemos un dto por ser guay',
            'category' => 'Comida',
        ]);
    }
}
