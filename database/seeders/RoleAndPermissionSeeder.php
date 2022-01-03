<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $adminAccess = Permission::make(['name' => 'admin.access']);
        $adminAccess->saveOrFail();
        $usersCreate = Permission::make(['name' => 'users.create']);
        $usersCreate->saveOrFail();
        $usersEdit = Permission::make(['name' => 'users.edit']);
        $usersEdit->saveOrFail();
        $usersPublish = Permission::make(['name' => 'users.publish']);
        $usersPublish->saveOrFail();
        $usersDelete = Permission::make(['name' => 'users.delete']);
        $usersDelete->saveOrFail();
        $rolesCreate = Permission::make(['name' => 'roles.create']);
        $rolesCreate->saveOrFail();
        $rolesEdit = Permission::make(['name' => 'roles.edit']);
        $rolesEdit->saveOrFail();
        $rolesPublish = Permission::make(['name' => 'roles.publish']);
        $rolesPublish->saveOrFail();
        $rolesDelete = Permission::make(['name' => 'roles.delete']);
        $rolesDelete->saveOrFail();
        $settingsPerms = Permission::make(['name' => 'settings.*']);
        $settingsPerms->saveOrFail();
        $postsCreate = Permission::make(['name' => 'posts.create']);
        $postsCreate->saveOrFail();
        $postsEdit = Permission::make(['name' => 'posts.edit']);
        $postsEdit->saveOrFail();
        $postsPublish = Permission::make(['name' => 'posts.publish']);
        $postsPublish->saveOrFail();
        $postsDelete = Permission::make(['name' => 'posts.delete']);
        $postsDelete->saveOrFail();

        // create roles and assign existing permissions
        $role1 = Role::make(['name' => 'Admin']);
        $role1->saveOrFail();
        $role2 = Role::make(['name' => 'Modérateur']);
        $role2->saveOrFail();
        $role3 = Role::make(['name' => 'Éditeur']);
        $role3->saveOrFail();
        $role4 = Role::make(['name' => 'Basic']);
        $role4->saveOrFail();

        $adminAccess->assignRole($role1, $role2, $role3);
        $usersCreate->assignRole($role1);
        $usersEdit->assignRole($role1);
        $usersPublish->assignRole($role1, $role2);
        $usersDelete->assignRole($role1);
        $rolesCreate->assignRole($role1);
        $rolesEdit->assignRole($role1);
        $rolesPublish->assignRole($role1);
        $rolesDelete->assignRole($role1);
        $settingsPerms->assignRole($role1);
        $postsCreate->assignRole($role1, $role3);
        $postsEdit->assignRole($role1, $role3);
        $postsPublish->assignRole($role1, $role3);
        $postsDelete->assignRole($role1);
        
        $superAdmin = Role::create(['name' => 'Super Admin']);
        $superAdmin->givePermissionTo(Permission::all());
    }
}
