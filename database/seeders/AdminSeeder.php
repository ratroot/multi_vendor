<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRecords = [
                'name' => 'Super Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('Admin@12345'),
                'image' => '',
                'type' => 'superadmin',
                'mobile' => '123456789',
                'status' => 1
        ];
        Admin::create($adminRecords);
    }
}
