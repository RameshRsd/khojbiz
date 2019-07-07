<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new App\User;
        $role_admin->name="admin";
        $role_admin->email="admin@khojbiz.com";
        $role_admin->password = bcrypt('admin123');
        $role_admin->type='admin';
        $role_admin->status='active';
        $role_admin->save();
    }
}
