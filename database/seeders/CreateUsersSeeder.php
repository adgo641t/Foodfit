<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;  
use Spatie\Permission\Models\Permission;

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
            'name' => 'Adrian',
            'email'     => 'Adrian@UPC.com',
            'password' => '$2y$10$x.Ot5fO84DkomAhWkPBXTOEYNjsn.pZ9YGS2PDFPpfve8eJYsKu0q',
        ]);

        $role = Role::create(['name' => 'admin']);

        $user->assignRole($role);

        //Create the Permision to Admin
        //Blogs Permision
        Permission::create(['name' => 'DeleteBlog']);
        Permission::create(['name' => 'UpdateBlog']);
        //Products Premisions
        Permission::create(['name' => 'ComprarProductos']);
        Permission::create(['name' => 'DeleteProductos']);
        Permission::create(['name' => 'UpdateProductos']);



        //Give Permision to Update Delete to Admin
        $role->givePermissionTo('DeleteBlog');
        $role->givePermissionTo('UpdateBlog');


        $user = User::create([
            'name' => 'Jose',
            'email'     => 'Jose@upc.com',
            'password' => '$2y$10$x.Ot5fO84DkomAhWkPBXTOEYNjsn.pZ9YGS2PDFPpfve8eJYsKu0q',
        ]);

        $role_Blog = Role::create(['name' => 'BlogCreator']);

        $user->assignRole($role_Blog);

        $role_Blog->givePermissionTo('DeleteBlog');
        $role_Blog->givePermissionTo('UpdateBlog');

        $user = User::create([
            'name' => 'wintop',
            'email'     => 'wintop@upc.com',
            'password' => '$2y$10$x.Ot5fO84DkomAhWkPBXTOEYNjsn.pZ9YGS2PDFPpfve8eJYsKu0q',
        ]);

        $role_cliente = Role::create(['name' => 'cliente']);

        $user->assignRole($role_cliente);
        $role_cliente->givePermissionTo('ComprarProductos');


        
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