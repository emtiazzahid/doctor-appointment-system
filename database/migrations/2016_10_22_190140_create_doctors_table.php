<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('branch_id')->unsigned()->index();
            $table->integer('speciality_id')->unsigned()->index();
            $table->string('name', 100);
            $table->timestamps();

            $table->foreign('branch_id')->references('id')->on('branches')
                ->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('speciality_id')->references('id')->on('specialities')
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
        Schema::drop('doctors');
    }
}
