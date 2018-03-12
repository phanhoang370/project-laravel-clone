<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->truncate();
        $adminRole = DB::table('roles')->insert([
            'name' => 'Admin',
            'display_name' => 'admin',
            'description' => 'Admin Role',
        ]);


        $userRole = DB::table('roles')->insert([
            'name' => 'User',
            'display_name' => 'user',
            'description' => 'User Role',
        ]);


        $userRole = DB::table('roles')->insert([
            'name' => 'Unverified',
            'display_name' => 'unverified',
            'description' => 'Unverified Role',
        ]);

    }
}
