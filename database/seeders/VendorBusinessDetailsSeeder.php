<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorsBusinessDetail;

class VendorBusinessDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendorRecords = array(
            'shop_name' => 'Test Shop',
            'address' => 'St1, blue area',
            'city' => 'Islamabad',
            'state' => 'Islamabad',
            'country' => 'Pakistan',
            'mobile' => '923175469006',
            'vendor_id' => 1
        );
        VendorsBusinessDetail::create($vendorRecords);
    }
}
