<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCpuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->integer('manufacture_id')->unsigned();
            $table->foreign('manufacture_id')->references('id')->on('manufacture');
            $table->integer('series_id')->unsigned();
            $table->foreign('series_id')->references('id')->on('cpu_series');
            $table->integer('family_id')->unsigned();
            $table->foreign('family_id')->references('id')->on('cpu_family');
            $table->integer('socket_id')->unsigned();
            $table->foreign('socket_id')->references('id')->on('cpu_socket');
//            $table->integer('vga_id')->unsigned();
//            $table->foreign('vga_id')->refrences('id')->on('vga');
            $table->integer('core');
            $table->integer('tdp');
            $table->decimal('min_frequency');
            $table->decimal('max_frequency');
            $table->integer('max_memory');
            $table->string('l1_cache');
            $table->string('l2_cache');
            $table->string('l3_cache');
            $table->integer('data_width');
            $table->boolean('multi_thread');
            $table->boolean('ecc_support');
            $table->boolean('cooler_include');
            $table->enum('status', ['enable', 'disable']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cpu');
    }
}
