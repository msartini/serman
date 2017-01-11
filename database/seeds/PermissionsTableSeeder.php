<?php

use Illuminate\Database\Seeder;
use Serman\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the Permission Table seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'id' => 1,
                'name' => str_slug('Create Posts'),
                'display_name' => 'Create Posts',
                'description' => 'Create new blog posts'
            ],
            [
                'id' => 2,
                'name' => str_slug('Edit users'),
                'display_name' => 'Edit users',
                'description' => 'Edit existing users',
            ],
        ];

        foreach ($permissions as $permission) {
            DB::table('permissions')->insert($permission);
        }
    }
}
