<?php

use Illuminate\Database\Seeder;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ( 'days' )->insert ( array (
            array (
                'name' => 'Sunday'
            ),
            array (
                'name' => 'Monday'
            ),
            array (
                'name' => 'Tuesday'
            ),
            array (
                'name' => 'Wednesday'
            ),
            array (
                'name' => 'Thursday'
            ),
            array (
                'name' => 'Friday'
            ),
            array (
                'name' => 'Saturday'
            )
        ));
    }
}
