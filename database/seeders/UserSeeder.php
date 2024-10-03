<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
           ['name' => 'Admin',
            'email' =>'admin@gmail.com',
            'password' =>bcrypt(1234),
            'role'=>'Admin'
        ],
        ['name' => 'vendor',
        'email' =>'vendor@gmail.com',
        'password' =>bcrypt(1234),
        'role'=>'Vendor'
        ],
        ['name' => 'customer',
        'email' =>'customer@gmail.com',
        'password' =>bcrypt(1234),
        'role'=>'Customer'
        ]


        ]);
    }
}
