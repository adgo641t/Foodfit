<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;  
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

        
        $user = User::create([
            'id'       => 1,
            'name' => 'Adrian',
            'email'     => 'Adrian@UPC.com',
            'password' => '$2y$10$x.Ot5fO84DkomAhWkPBXTOEYNjsn.pZ9YGS2PDFPpfve8eJYsKu0q',
        ]);

        $role = Role::create(['name' => 'admin']);

        $user->assignRole($role);

        $user = User::create([
            'id'       => 2,
            'name' => 'wintop',
            'email'     => 'wintop@upc.com',
            'password' => '$2y$10$x.Ot5fO84DkomAhWkPBXTOEYNjsn.pZ9YGS2PDFPpfve8eJYsKu0q',
        ]);

        $role = Role::create(['name' => 'cliente']);

        $user->assignRole($role);

        
        // $users = [
        //     [
        //        'name'=>'Admin User',
        //        'email'=>'admin@laratutorials.com',
        //        'type'=>1,
        //        'password'=> bcrypt('123456'),
        //     ],
        //     [
        //        'name'=>'test',
        //        'email'=>'test@gmail.com',
        //        'type'=>0,
        //        'password'=> bcrypt('123456'),
        //     ],
        // ];
    
        // foreach ($users as $key => $user) {
        //     User::create($user); 
        // }
    }
}