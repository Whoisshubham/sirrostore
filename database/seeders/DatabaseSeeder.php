<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\HomeSection;
use App\Models\States;
use Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make("12345")
        ]);

      

    }
}
