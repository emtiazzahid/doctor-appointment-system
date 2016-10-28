<?php

use Illuminate\Database\Seeder;

class DoctorSchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ( 'doctor_schedules' )->insert ( array (
            array (
                'doctor_id' => '1',
                'day_id' => '3',
                'entry_time' => '09:00:00',
                'leave_time' => '13:00:00'
            ),
            array (
                'doctor_id' => '1',
                'day_id' => '3',
                'entry_time' => '17:00:00',
                'leave_time' => '20:00:00'
            ),
            array (
                'doctor_id' => '1',
                'day_id' => '5',
                'entry_time' => '09:00:00',
                'leave_time' => '13:00:00'
            ),
            array (
                'doctor_id' => '1',
                'day_id' => '1',
                'entry_time' => '17:00:00',
                'leave_time' => '20:00:00'
            ),
            array (
                'doctor_id' => '2',
                'day_id' => '4',
                'entry_time' => '09:00:00',
                'leave_time' => '13:00:00'
            ),
            array (
                'doctor_id' => '2',
                'day_id' => '5',
                'entry_time' => '17:00:00',
                'leave_time' => '20:00:00'
            ),
            array (
                'doctor_id' => '2',
                'day_id' => '7',
                'entry_time' => '09:00:00',
                'leave_time' => '13:00:00'
            ),
            array (
                'doctor_id' => '2',
                'day_id' => '1',
                'entry_time' => '17:00:00',
                'leave_time' => '20:00:00'
            ),
        ));
    }
}
