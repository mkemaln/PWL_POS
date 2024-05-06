<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'level_id' => 1,
                'username' => 'admin',
                'nama' => 'Administrator',
                'password' => Hash::make('12345'),
                'image' => 'http://127.0.0.1:8000/storage/posts/Hx2tVKdcUvQkQntzl5DRSMQS7NlcUUzoOuZ4sAbp.jpg',
            ],
            [
                'user_id' => 2,
                'level_id' => 2,
                'username' => 'manager',
                'nama' => 'Manager',
                'password' => Hash::make('12345'),
                'image' => 'http://127.0.0.1:8000/storage/posts/Hx2tVKdcUvQkQntzl5DRSMQS7NlcUUzoOuZ4sAbp.jpg',
            ],
            [
                'user_id' => 3,
                'level_id' => 3,
                'username' => 'staff',
                'nama' => 'Staff/Kasir',
                'password' => Hash::make('12345'),
                'image' => 'http://127.0.0.1:8000/storage/posts/Hx2tVKdcUvQkQntzl5DRSMQS7NlcUUzoOuZ4sAbp.jpg',
            ],
        ];
        DB::table('m_user')->insert($data);
    }
}
