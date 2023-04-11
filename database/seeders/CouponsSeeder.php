<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // Two coupons created to test the coupon implementation
    public function run()
    {
        Coupon::create([
            'code' => 'ABC123',
            'description' => 'Te hacemos un dto por elegir un pedido de la categoria Vegetariana',
            'habilitado' => 'Desabilitado',
            'amount' => 5,
        ]);

        Coupon::create([
            'code' => 'EATWELL',
            'description' => 'te hacemos dto cuando precio total es mas de 40€',
            'habilitado' => 'habilitado',
            'amount' => 10,
        ]);
    }
}
