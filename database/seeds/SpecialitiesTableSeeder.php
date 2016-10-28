<?php

use Illuminate\Database\Seeder;

class SpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ( 'specialities' )->insert ( array (
            array (
                'id' => '1',
                'name' => 'Anesthesiology'
            ),
            array (
                'id' => '2',
                'name' => 'Cardiac Surgery'
            ),
            array (
                'id' => '3',
                'name' => 'Cardiology'
            ),
            array (
                'id' => '4',
                'name' => 'Dental'
            ),
            array (
                'id' => '5',
                'name' => 'Emergency'
            ),
            array (
                'id' => '6',
                'name' => 'Neurology'
            ),
            array (
                'id' => '7',
                'name' => 'ICU'
            )
        ));
    }
}
