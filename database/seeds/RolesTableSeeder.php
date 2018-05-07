<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
                                    ['name' => 'Role 1', 'description' => 'Desc'],
       	                            ['name' => 'Role 2', 'description' => 'Desc'],
       	                            ['name' => 'Role 3', 'description' => 'Desc']
                                );
    }
}
