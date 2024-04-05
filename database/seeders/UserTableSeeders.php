<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'fahim',
            'username' => 'example_user1',
            'email' => 'fahimmahmud@gmail.com',
            'role' => 'user',
            'phone' => '1234567890',
            'address' => '123 Main St',
            'status' => 'active',
            'photo' => 'example.jpg',
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'fahim',
            'username' => 'example_user2',
            'email' => 'fahimmahmu@gmail.com',
            'role' => 'admin',
            'phone' => '1234567890',
            'address' => '123 Main St',
            'status' => 'active',
            'photo' => 'example.jpg',
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'fahim',
            'username' => 'example_user3',
            'email' => 'fahimmahm@gmail.com',
            'role' => 'vendor',
            'phone' => '123456',
            'address' => '123 Main St',
            'status' => 'active',
            'photo' => 'example.jpg',
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'fahim',
            'username' => 'example_user4',
            'email' => 'fahimm@gmail.com',
            'role' => 'user',
            'phone' => '1234567890',
            'address' => '123 Main St',
            'status' => 'active',
            'photo' => 'example.jpg',
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
