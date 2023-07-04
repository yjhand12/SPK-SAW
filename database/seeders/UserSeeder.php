<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'nama'	=> 'Admin Utama',
            'email'	=> 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'role' => 'ADMIN',
    ]);
    }
}
