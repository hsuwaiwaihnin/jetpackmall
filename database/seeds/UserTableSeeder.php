<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = User::create([
        	'name' => 'Ko Ko',
        	'email' => 'admin@gmail.com',
        	'password'=>Hash::make('123456789')
        ]);
        $admin->assignRole('admin');

        $customer=User::create([
        	'name' => 'Ma Ma',
        	'email' => 'mama@gmail.com',
        	'password'=>Hash::make('123456789')
        ]);
        $customer->assignRole('customer');
    }
}
