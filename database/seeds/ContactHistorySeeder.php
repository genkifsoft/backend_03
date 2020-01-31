<?php

use Illuminate\Database\Seeder;

class ContactHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_history')->insert([
            [
                'customerID' => 'C1120011',
                'overview' => 'overview 1',
                'content' => 'Giao dịch về tiền bạc',
                'contact_date_and_time' => '2020-10-10 19:10:10',
                'status' => 1,
                'order_accuracy' => 'A+',
                'persion_in_change_ID' => '1',
                'sales_staffID' => 'E1120011',
            ],
            [
                'customerID' => 'C1120011',
                'overview' => 'overview 2',
                'content' => 'Giao dịch 3kg gạo',
                'contact_date_and_time' => '2020-11-10 19:10:10',
                'status' => 2,
                'order_accuracy' => 'B',
                'persion_in_change_ID' => '2',
                'sales_staffID' => 'E1120011',
            ],
            [
                'customerID' => 'C1120011',
                'overview' => 'overview 3',
                'content' => 'Giao dịch bất động sản',
                'contact_date_and_time' => '2020-12-10 19:10:10',
                'status' => 3,
                'order_accuracy' => 'C',
                'persion_in_change_ID' => '3',
                'sales_staffID' => 'E1120011',
            ],
        ]);
    }
}
