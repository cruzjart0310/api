<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	// $this->call(UsersTableSeeder::class);
       	DB::table('users')->insert(['name' => 'Arturo Cruz', 'email' => 'jcruz@abrhil.com', 'password' => 'calabaza', 'remember_token' => '']);

       	DB::table('user_profiles')->insert(['user_id' => '1', 'address' => 'SM 102', 'ocupation' => 'Dev Backend']);

       	DB::table('roles')->insert(['name' => 'Role 1', 'description' => 'Desc']);
       	DB::table('roles')->insert(['name' => 'Role 2', 'description' => 'Desc']);
       	DB::table('roles')->insert(['name' => 'Role 3', 'description' => 'Desc']);

       	DB::table('permissions')->insert(['name' => 'Permission 1', 'description' => 'Desc']);
       	DB::table('permissions')->insert(['name' => 'Permission 2', 'description' => 'Desc']);
       	DB::table('permissions')->insert(['name' => 'Permission 3', 'description' => 'Desc']);

       	DB::table('roles_permissions')->insert(['role_id' => '1', 'permission_id' => '1']);
       	DB::table('roles_permissions')->insert(['role_id' => '1', 'permission_id' => '2']);
       	DB::table('roles_permissions')->insert(['role_id' => '1', 'permission_id' => '3']);
       	DB::table('roles_permissions')->insert(['role_id' => '2', 'permission_id' => '1']);
       	DB::table('roles_permissions')->insert(['role_id' => '2', 'permission_id' => '2']);
       	DB::table('roles_permissions')->insert(['role_id' => '3', 'permission_id' => '1']);

       	DB::table('users_permissions')->insert(['user_id' => '1', 'permission_id' => '1']);
       	DB::table('users_permissions')->insert(['user_id' => '1', 'permission_id' => '2']);
       	DB::table('users_permissions')->insert(['user_id' => '1', 'permission_id' => '3']);
    }
}
