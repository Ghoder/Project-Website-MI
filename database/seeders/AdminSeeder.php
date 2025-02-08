<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Fathus Admin',
            'email' => 'fathughoder@gmail.com',
            'password' => Hash::make('fathusss1'),
            'role' => 'admin'
        ]);
    }
}
