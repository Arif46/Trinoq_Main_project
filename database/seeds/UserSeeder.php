<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'id' =>1,
            'name' => 'Arif',
            'email' =>'arifuzzamanarif42@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
