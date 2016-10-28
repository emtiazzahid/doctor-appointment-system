<?php

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ( 'branches' )->insert ( array (
            array (
                'id' => '1',
                'name' => 'SQUARE Hospital Ltd. Dhaka'
            ),
            array (
                'id' => '2',
                'name' => 'SQUARE Hospital Ltd. Sylhet'
            )
        ));
    }
}
