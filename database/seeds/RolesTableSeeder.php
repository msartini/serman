<?php

use Illuminate\Database\Seeder;
use Serman\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the Role Table seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'owner',
                'display_name' => 'Project Owner',
                'description' => 'User is the owner of a given project'
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'display_name' => 'User Admin',
                'description' => 'User is allowed to manage and edit other users',
            ],
        ];

        foreach ($roles as $role) {
            DB::table('roles')->insert($role);
        }
    }
}
