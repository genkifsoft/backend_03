<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EmployeeMasterTableSeeder::class);
        $this->call(SalesStaffTableSeeder::class);
        $this->call(CustomerMasterSeeder::class);
        $this->call(ContactHistorySeeder::class);
        $this->call(CustomerRepresentativeSeeder::class);
    }
}
