<?php

namespace Database\Seeders;

use App\Models\Landlord\Admin;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Admin::firstOrCreate(
            [
                'username' => 'super_admin'
            ],
            [
                'name' => 'Super Admin',
                'username' => 'super_admin',
                'email' => 'super@admin.com',
                'password' => Hash::make(12345678)
            ]
        );
    }
}
