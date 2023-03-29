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
            'name' => 'Ninguna categoria',
        ]);
        Category_blogs::create([
            'name' => 'Salud y Bienestar',
        ]);
        Category_blogs::create([
            'name' => 'Alimentacion',
        ]);
        Category_blogs::create([
            'name' => 'Deporte',
        ]);
    }
}
