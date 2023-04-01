<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorsBankDetail;

class VendorsBankDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendor_bank_details = array(
            'account_title' => 'Usman Raza',
            'account_number' => '024003200',
            'bank_name' => 'Askari Bank',
            'bank_code' => 0240,
            'vendor_id' => 1
        );

        VendorsBankDetail::create($vendor_bank_details);
    }
}
