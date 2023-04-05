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

        //Rol de Administrador--//
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
        //Coupons Permisions
        Permission::create(['name' => 'CreateCoupons']);
        Permission::create(['name' => 'DeleteCoupons']);
        Permission::create(['name' => 'UpdateCoupons']);

        //Give Permision blog to Update Delete to Admin
        $role->givePermissionTo('DeleteBlog');
        $role->givePermissionTo('UpdateBlog');

        //Give permision admin to Products
        $role->givePermissionTo('ComprarProductos');
        $role->givePermissionTo('DeleteProductos');
        $role->givePermissionTo('UpdateProductos');
        
        //Give Permision Coupons to Admin
        $role->givePermissionTo('CreateCoupons');
        $role->givePermissionTo('DeleteCoupons');
        $role->givePermissionTo('UpdateCoupons');


        //Rol de Blog Creator--///
        $user_blog = User::create([
            'name' => 'Jose',
            'email'     => 'Jose@upc.com',
            'password' => '$2y$10$x.Ot5fO84DkomAhWkPBXTOEYNjsn.pZ9YGS2PDFPpfve8eJYsKu0q',
        ]);

        $role_Blog = Role::create(['name' => 'BlogCreator']);

        $user_blog->assignRole($role_Blog);

        $role_Blog->givePermissionTo('DeleteBlog');
        $role_Blog->givePermissionTo('UpdateBlog');

        $user_cliente= User::create([
            'name' => 'wintop',
            'email'     => 'wintop@upc.com',
            'password' => '$2y$10$x.Ot5fO84DkomAhWkPBXTOEYNjsn.pZ9YGS2PDFPpfve8eJYsKu0q',
        ]);

        $role_cliente = Role::create(['name' => 'cliente']);

        $user_cliente->assignRole($role_cliente);


        //Rol de Chef----//
        $user_chef= User::create([
            'name' => 'Chef',
            'email'     => 'Chef@upc.com',
            'password' => '$2y$10$x.Ot5fO84DkomAhWkPBXTOEYNjsn.pZ9YGS2PDFPpfve8eJYsKu0q',
        ]);

        $rol_chef = Role::create(['name' => 'chef']);

        Permission::create(['name' => 'UpdatePedido']);

        $user_chef->givePermissionTo('UpdatePedido');      
        
        $user_chef->assignRole($rol_chef);

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