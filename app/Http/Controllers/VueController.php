<?php

namespace Serman\Http\Controllers;

use Serman\Role;
use Serman\User;
use Serman\Permission;

class VueController extends Controller
{
    public function index()
    {
        // $admin = Role::find(1);
        // $user = User::where('email', '=', 'msartini@gmail.com')->first();

        // $createPost = Permission::find(1);
        // $editUser = Permission::find(2);

        // $adminRole = Role::find(2);
        // $ownerRole = Role::find(1);

        // $adminRole->perms()->sync([]);
        // $adminRole->attachPermission($createPost);
        // // equivalent to $admin->perms()->sync(array($createPost->id));
        // $ownerRole->perms()->sync([]);
        // $ownerRole->attachPermissions(array($createPost, $editUser));

        // role attach alias
        //$user->attachRole($admin); // parameter can be an Role object, array, or id

        // or eloquent's original technique
        //$user->roles()->attach($admin->id); // id only





        return view('vue');
    }
}
