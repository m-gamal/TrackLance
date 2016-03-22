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
        DB::table('users')->insert([
            'name'      =>  'Mohamed Gamal',
            'email'     =>  'mg.developer92@gmail.com',
            'password'  =>  \Hash::make('password'),
            'mobile'    =>  '+201014300694',
            'website'   => 'http:://www.mg-developer.com',
            'role'      =>  1,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}