<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category_blogs;

class categorys_blog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category_blogs::create([
            'name' => 'Salud',
        ]);
        Category_blogs::create([
            'name' => 'Guay',
        ]);
        Category_blogs::create([
            'name' => 'Comida',
        ]);
        Category_blogs::create([
            'name' => 'Deporte',
        ]);
    }
}
