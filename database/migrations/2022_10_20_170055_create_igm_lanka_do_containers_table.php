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
        Schema::create('igm_lanka_do_containers', function (Blueprint $table) {
            $table->id();
            $table->integer('igm_id');
            $table->integer('equipment_id');
            $table->string('seal_no',50);
            $table->string('description',50);
            $table->decimal('weight',10,2);
            $table->string('measurement',50);
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
        Schema::dropIfExists('igm_lanka_do_containers');
    }
};
