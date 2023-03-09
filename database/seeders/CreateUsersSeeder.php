<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // We created two users to test the login and register
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@laratutorials.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'test',
               'email'=>'test@gmail.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}