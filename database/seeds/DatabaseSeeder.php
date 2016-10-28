<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(DaysTableSeeder::class);
        $this->call(SpecialitiesTableSeeder::class);
        $this->call(DoctorsTableSeeder::class);
        $this->call(SlotsTableSeeder::class);
        $this->call(DoctorSchedulesTableSeeder::class);
    }
}
