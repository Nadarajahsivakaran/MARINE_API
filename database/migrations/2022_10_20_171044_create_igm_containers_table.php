<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('igm_containers', function (Blueprint $table) {
            $table->id();
            $table->integer('igm_id');
            $table->integer('bill_of_landing_id');
            $table->integer('no_of_packages');
            $table->integer('type_of_container');
            $table->integer('empty_Full');
            $table->integer('deleted');
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
        Schema::dropIfExists('igm_containers');
    }
};
