<?php

use Illuminate\Database\Seeder;

class EmployeeMasterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_master')->insert([
            [
                'employeeID' => 'E1120011',
                'fullname' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt(12345678),
                'department_name' => 'lập trìn viên',
                'position' => 'font developer',
                'permission' => 1,
            ],
            [
                'employeeID' => 'E1002111',
                'fullname'  => 'editor',
                'email' => 'editor@gmail.com',
                'password' => bcrypt(12345678),
                'department_name' => 'kế toán',
                'position' => 'font developer',
                'permission' => 1,
            ],
            [
                'employeeID' => 'E1092001',
                'fullname'  => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt(12345678),
                'department_name' => 'thu ngân',
                'position' => 'backend developer',
                'permission' => 1,
            ],
        ]);
    }
}
