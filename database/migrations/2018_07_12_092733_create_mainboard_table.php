<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mainboard', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->integer('manufacture_id')->unsigned();
            $table->foreign('manufacture_id')->references('id')->on('manufacture');
            $table->integer('cpu_socket_id')->unsigned();
            $table->foreign('cpu_socket_id')->references('id')->on('cpu_socket');
            $table->integer('mainboard_form_factor_id')->unsigned();
            $table->foreign('mainboard_form_factor_id')->references('id')->on('mainboard_form_factor');
            $table->integer('mainboard_chipset_id')->unsigned();
            $table->foreign('mainboard_chipset_id')->references('id')->on('mainboard_chipset');
            $table->integer('vga_bridge_id')->unsigned();
            $table->foreign('vga_bridge_id')->references('id')->on('vga_bridge');
            $table->integer('memory_type_id')->unsigned();
            $table->foreign('memory_type_id')->references('id')->on('memory_type');
            $table->integer('sata3');
            $table->integer('sata6');
            $table->integer('sata_express');
            $table->integer('m2_port');
            $table->integer('msata_slut');
            $table->integer('memory_slot');
            $table->integer('max_memory');
            $table->integer('pci_ex16');
            $table->integer('pci_ex8');
            $table->integer('pci_ex4');
            $table->integer('pci_ex1');
            $table->integer('pci');
            $table->integer('ethernet');
            $table->boolean('onboard_vga');
            $table->boolean('ecc_support');
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
        Schema::dropIfExists('mainboard');
    }
}
