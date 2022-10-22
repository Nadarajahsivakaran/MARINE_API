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
        Schema::create('igm_india_containers', function (Blueprint $table) {
            $table->id();
            $table->integer('igm_id');
            $table->integer('cargo_info_number');
            $table->string('pod',50);
            $table->string('imo',50);
            $table->string('vessel',50);
            $table->string('voyage',50);
            $table->integer('line');
            $table->integer('sub_line');
            $table->integer('equipment_id');
            $table->string('seal',50);
            $table->string('pan',50);
            $table->string('type',50);
            $table->integer('pkgs');
            $table->integer('gross_weight');
            $table->integer('con_code');
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
        Schema::dropIfExists('igm_india_containers');
    }
};
