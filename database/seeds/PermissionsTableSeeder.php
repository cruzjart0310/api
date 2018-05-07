<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       	DB::table('permissions')->insert(
                                          ['name' => 'Permission 1', 'description' => 'Desc'],
       	                                  ['name' => 'Permission 2', 'description' => 'Desc'],
       	                                  ['name' => 'Permission 3', 'description' => 'Desc']
         								);

       	DB::table('roles_permissions')->insert(
                                                ['role_id' => '1', 'permission_id' => '1'],
                                                ['role_id' => '1', 'permission_id' => '3'],
                                                ['role_id' => '2', 'permission_id' => '1'],
                                                ['role_id' => '2', 'permission_id' => '2'],
       	                                        ['role_id' => '1', 'permission_id' => '2'],
       	                                        ['role_id' => '3', 'permission_id' => '1']
                                            );

       	DB::table('users_permissions')->insert(
                                                ['user_id' => '1', 'permission_id' => '1'],
       	                                        ['user_id' => '1', 'permission_id' => '2'],
       	                                        ['user_id' => '1', 'permission_id' => '3']
                                            );
    }
}
