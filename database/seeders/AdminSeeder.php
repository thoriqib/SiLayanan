<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\User;

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
            'name'     => 'fiqri wahyu',
            'email'    => 'fiqriwahyu58@gmail.com',
            'role'     => 'Super Admin',
            'password' => bcrypt('bh4300'),
        ]);
    }
}
