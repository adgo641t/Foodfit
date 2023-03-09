<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //name
        $category1 = new Category();

        $category1->name = "Lacteos";

        $category1->save();

        $category2 = new Category();

        $category2->name = "100% Vegetal";

        $category2->save();

        $category3 = new Category();

        $category3->name = "Desayuno";

        $category3->save();

        $category4 = new Category();

        $category4->name = "Almuerzo/Cena";

        $category4->save();

        $category5 = new Category();

        $category5->name = "Vegetariano";

        $category5->save();
    }
}
