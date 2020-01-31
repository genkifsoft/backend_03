<?php

use Illuminate\Database\Seeder;

class SalesStaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales_staff')->insert([
            [
                'customerID' => 'C1120011',
                'employeeID'  => 'E1120011',
            ],
            [
                'customerID' => 'C1120011',
                'employeeID'  => 'E1002111',
            ],
            [
                'customerID' => 'C1120011',
                'employeeID'  => 'E1092001',
            ],
        ]);
    }
}
