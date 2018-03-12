<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (Permission::where('name', '=', 'Can View Dashboard')->first() === null) {
            Permission::create([
                'name'        => 'Can View Dashboard',
                'display_name'        => 'Admin',
                'description' => 'Can View Dashboard',
            ]);
        }

        if (Permission::where('name', '=', 'Can View Users')->first() === null) {
            Permission::create([
                'name'        => 'Can View Users',
                'display_name'        => 'Admin',
                'description' => 'Can view users',
            ]);
        }

        if (Permission::where('name', '=', 'Can Create Users')->first() === null) {
            Permission::create([
                'name'        => 'Can Create Users',
                'display_name'        => 'Admin',
                'description' => 'Can create new users',
            ]);
        }

        if (Permission::where('name', '=', 'Can Edit Users')->first() === null) {
            Permission::create([
                'name'        => 'Can Edit Users',
                'display_name'        => 'Admin',
                'description' => 'Can edit users',
            ]);
        }

        if (Permission::where('name', '=', 'Can Delete Users')->first() === null) {
            Permission::create([
                'name'        => 'Can Delete Users',
                'display_name'        => 'Admin',
                'description' => 'Can delete users',
            ]);
        }
    }
}
