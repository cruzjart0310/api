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
        DB::table('users')->insert(
                                    ['name' => 'Arturo Cruz', 'email' => 'jcruz@abrhil.com', 'password' => 'calabaza', 'remember_token' => '']
                                );

       	DB::table('profile')->insert(
                                        ['user_id' => '1', 'address' => 'SM 102', 'ocupation' => 'Dev Backend', 'image' =>'avatar.png']
                                    );
    }
}
