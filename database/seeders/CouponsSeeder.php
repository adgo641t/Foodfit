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
            'description' => 'Te hacemos un dto por ser guay',
            'habilitado' => 'desabilitado',
            'amount' => 15,
        ]);

        Coupon::create([
            'code' => 'EATWELL',
            'description' => 'Te hacemos un dto por ser sano',
            'habilitado' => 'habilitado',
            'amount' => 10,
        ]);
    }
}
