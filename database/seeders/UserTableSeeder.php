<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([

            //for admin
            [
                'full_name'         => 'Provider Admin',
                'full_name'         => 'Admin',
                'email'             =>'admin@gmail.com',
                'password'          =>Hash::make('123456789'),
                'role'              =>'admin',
                'status'            =>'active'
            ],

            //for vendor
            [
                'full_name'         => 'Provider Vendor',
                'full_name'         => 'Vendor',
                'email'             =>'vendor@gmail.com',
                'password'          =>Hash::make('123456789'),
                'role'              =>'vendor',
                'status'            =>'active'
            ],

            //for customer
            [
                'full_name'         => 'Customer Vendor',
                'full_name'         => 'Customer',
                'email'             =>'customer@gmail.com',
                'password'          =>Hash::make('123456789'),
                'role'              =>'customer',
                'status'            =>'active'
            ]

        ]);
    }
}
