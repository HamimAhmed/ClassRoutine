<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  => 'admin',
            'email' => 'admin@gmail.com',
            'mobile_no' => '01726711573',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
            'image' => null,
        ]);
    }
}
