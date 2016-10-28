<?php

use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ( 'doctors' )->insert ( array (
        array (
            'id' => '1',
            'branch_id' => '1',
            'speciality_id' => '3',
            'name' => 'Dr. ABC'
        ),
        array (
            'id' => '2',
            'branch_id' => '1',
            'speciality_id' => '2',
            'name' => 'Dr. XYZ'
        )
    ));
    }
}
