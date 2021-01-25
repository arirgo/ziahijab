<?php

use Illuminate\Database\Seeder;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$user = User::create([
        	'name' 	=> 'Deni Setiyo Wibowo',
        	'email'	=> 'denisetiyowibowo@gmail.com',
        	'password' => bcrypt('password')
        ]);

        $user->assignRole('admin');



        $user = User::create([
        	'name' 	=> 'Aftari Nurishlah',
        	'email'	=> 'nurishlahaftari@gmail.com',
        	'password' => bcrypt('password')
        ]);

        $user->assignRole('user');


    }
}
