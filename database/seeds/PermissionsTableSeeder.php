<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Users
        Permission::create([
            'name'        => 'Navegar usuarios',
            'slug'        => 'users.index',
            'description' => 'lista e navega por todos usuarios do sistema'
        ]);

        Permission::create([
            'name'        => 'Ver detalhes dos usuarios',
            'slug'        => 'users.show',
            'description' => 'ver em detalhes cada usuario do sistema'
        ]);

        Permission::create([
            'name'        => 'Edição de usuarios',
            'slug'        => 'users.edit',
            'description' => 'Editar qualquer dado de um usuário do sistema'
        ]);

        Permission::create([
            'name'        => 'Eliminar usuarios',
            'slug'        => 'users.destroy',
            'description' => 'Eliminar qualquer dado de um usuarios do sistema'
        ]);

        // Roles
        Permission::create([
            'name'        => 'Navegar roles',
            'slug'        => 'roles.index',
            'description' => 'lista e navega por todos roles do sistema'
        ]);

        Permission::create([
            'name'        => 'Ver detalhes dos rol',
            'slug'        => 'roles.show',
            'description' => 'ver em detalhes cada roles do sistema'
        ]);

        Permission::create([
            'name'        => 'Edição de rol',
            'slug'        => 'roles.create',
            'description' => 'Editar qualquer dado de um roles do sistema'
        ]);

        Permission::create([
            'name'        => 'Edição de rol',
            'slug'        => 'roles.edit',
            'description' => 'Editar qualquer dado de um roles do sistema'
        ]);

        Permission::create([
            'name'        => 'Eliminar rol',
            'slug'        => 'roles.destroy',
            'description' => 'Eliminar qualquer dado de um roles do sistema'
        ]);

        // Products
        Permission::create([
            'name'        => 'Navegar products',
            'slug'        => 'products.index',
            'description' => 'lista e navega por todos products do sistema'
        ]);

        Permission::create([
            'name'        => 'Ver detalhes dos product',
            'slug'        => 'products.show',
            'description' => 'ver em detalhes cada products do sistema'
        ]);

        Permission::create([
            'name'        => 'Edição de product',
            'slug'        => 'products.create',
            'description' => 'Editar qualquer dado de um products do sistema'
        ]);

        Permission::create([
            'name'        => 'Edição de product',
            'slug'        => 'products.edit',
            'description' => 'Editar qualquer dado de um products do sistema'
        ]);

        Permission::create([
            'name'        => 'Eliminar product',
            'slug'        => 'products.destroy',
            'description' => 'Eliminar qualquer dado de um products do sistema'
        ]);
    }
}
