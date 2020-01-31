<?php

use Illuminate\Database\Seeder;

class CustomerRepresentativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_representative')->insert([
            [
                'customerID' => 'C1120011',
                'persion_in_change_ID' => 1,
                'fullname' => 'Lê thị bich',
                'email' => 'lebich@gmail.com',
                'direct_telephone_number' => '091019112',
                'department_name' => 'Trưởng phòng nhân sự',
                'position' => 'nhân viên cấp cao',
                'internal_memo' => '1',
            ]
        ]);
    }
}
