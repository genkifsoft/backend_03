<?php

use Illuminate\Database\Seeder;

class CustomerMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_master')->insert([
            [
                'customerID' => 'C1120011',
                'postal_code' => '700011',
                'address' => 'Address phú thọ - nguyễn huệ',
                'representative_telephone_number' => 192023131,
                'fax_number' => 9182022,
                'url' => 'https:w3school.com',
                'internal_memo' => '1',
            ],
            [
                'customerID' => 'C1120011',
                'postal_code' => '300011',
                'address' => 'Address hồ chí minh - nguyễn huệ quận 1',
                'representative_telephone_number' => 032023131,
                'fax_number' => 1182022,
                'url' => 'https:link not found',
                'internal_memo' => '2',
            ],
            [
                'customerID' => 'C1120011',
                'postal_code' => '200011',
                'address' => 'Address nha trang - nguyễn huệ quận 1',
                'representative_telephone_number' => 232023131,
                'fax_number' => 382022,
                'url' => 'https:link not found',
                'internal_memo' => '3',
            ]
        ]);
    }
    
}
