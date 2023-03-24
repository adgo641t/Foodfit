<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    // We create all our products manually with all the attributes
    {
        //name 	price

        Product::create([
            'name' => 'Pan integral con aguacate y huevo',
            'price' => 6,
            'description' => 'Pan integral con aguacate y huevo',
            'image' => 'egg.jpeg',
            'categories' => 'Desayuno',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Huevo revuelto con ensalada',
            'price' => 7,
            'description' => 'Huevo revuelto con ensalada',
            'image' => 'revuelto.jpg',
            'categories' => '100% saludable',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Macedonia de frutas',
            'price' => 6,
            'description' => 'Macedonia de frutas',
            'image' => 'macedonia.jpg',
            'categories' => '100% saludable',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Pincho de gambas al horno con salteado de verdura',
            'price' => 8,
            'description' => 'Pincho de gambas al horno con salteado de verdura',
            'image' => 'gambas.png',
            'categories' => 'Vegetariano',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Arroz a la berengena',
            'price' => 7,
            'description' => 'Arroz a la berengena',
            'image' => 'berengena.jpg',
            'categories' => 'Nuevo',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Salmon con coliflor',
            'price' => 7,
            'description' => 'Salmon con coliflor',
            'image' => 'salmon.jpg',
            'categories' => '100% saludable',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Aguacate con mix de piña y pollo',
            'price' => 9,
            'description' => 'Aguacate con mix de piña y pollo',
            'image' => 'ensalada.jpg',
            'categories' => 'Nuevo',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Aguacate con garbanzos',
            'price' => 10,
            'description' => 'Aguacate con garbanzos',
            'image' => 'garban.jpg',
            'categories' => '100% saludable',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Arroz meloso de pato y gorgonzola',
            'price' => 8,
            'description' => 'Arroz meloso de pato y gorgonzola',
            'image' => 'sopa.jpg',
            'categories' => 'Favoritos',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Carrilleras con crema de patata',
            'price' => 9,
            'description' => 'Carrilleras con crema de patata',
            'image' => 'carrilleras-con-crema-de-patata_B.jpg',
            'categories' => 'Favoritos',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Lasaña Florentina',
            'price' => 5,
            'description' => 'Lasaña Florentina',
            'image' => 'lasana-florentina_B.jpg',
            'categories' => 'Favoritos',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Curry massaman de legumbreta y verduras',
            'price' => 7,
            'description' => 'Curry massaman de legumbreta y verduras',
            'image' => 'pasta-alla.jpg',
            'categories' => 'Vegetariano',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Pasta alla gricia',
            'price' => 10,
            'description' => 'Pasta alla gricia',
            'image' => 'curry-massaman-de-legumbreta-y-verduras_B.jpg',
            'categories' => 'Favoritos',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Heura con salsa korma y verduras',
            'price' => 12,
            'description' => 'Heura con salsa korma y verduras',
            'image' => 'heura-con-salsa-korma-y-verduras.jpg',
            'categories' => 'Favoritos',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Garbanzos thai con curry',
            'price' => 13,
            'description' => 'Garbanzos thai con curry',
            'image' => 'garbanzos-thai-con-curry.jpg',
            'categories' => 'Favoritos',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Gemelli con salsa sorrentina',
            'price' => 10,
            'description' => 'Gemelli con salsa sorrentina',
            'image' => 'gemelli-con-salsa-sorrentina.jpg',
            'categories' => 'Favoritos',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Piquillos asados con garbanzos y arroz imperial',
            'price' => 8,
            'description' => 'Piquillos asados con garbanzos y arroz imperial',
            'image' => 'piquillos-asados-con-garbanzos-y-arroz-imperial.jpg',
            'categories' => 'Favoritos',
            'stock' => '40'
        ]);
        Product::create([
            'name' => 'Pisto de berenjenas',
            'price' => 7,
            'description' => 'Pisto de berenjenas',
            'image' => 'pisto-de-berenjenas.jpg',
            'categories' => 'Favoritos',
            'stock' => '40'
        ]);

    }
}
