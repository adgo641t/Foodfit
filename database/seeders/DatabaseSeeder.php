<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //Seeders of DB 
        $this->call(CreateUsersSeeder::class);
        $this->call(categorys_blog::class);
        $this->call(BlogSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CouponsSeeder::class);
        $this->call(Post_categorys_blog::class);

    }
}
