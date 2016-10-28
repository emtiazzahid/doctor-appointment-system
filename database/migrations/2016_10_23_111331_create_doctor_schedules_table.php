<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id')->unsigned()->index();
            $table->integer('day_id')->unsigned()->index();
            $table->time('entry_time');
            $table->time('leave_time');

            $table->foreign('doctor_id')->references('id')->on('doctors')
                ->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('day_id')->references('id')->on('days')
                ->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('doctor_schedules');
    }
}
