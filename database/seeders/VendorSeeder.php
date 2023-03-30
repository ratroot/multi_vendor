<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendor = array(
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'address' => 'ABC, xyz street',
            'city' => 'Islamabad',
            'state' => 'Islamabad',
            'country' => 'Pakistan',
            'pincode' => '44000',
            'mobile' => '987654321',
            'status' => 0
        );
        Vendor::create($vendor);
    }
}
