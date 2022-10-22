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
        Schema::create('igm_indias', function (Blueprint $table) {
            $table->id();
            $table->integer('bill_of_landing_id');
            $table->string('sender_id',50);
            $table->string('version_no',50);
            $table->string('message_id',50);
            $table->string('sequence',50);
            $table->date('date1');
            $table->time('time1');
            $table->string('pod1',50);
            $table->string('imo1',50);
            $table->string('call_sign1',50);
            $table->integer('igm_india_voyage_id');
            $table->integer('line_code');
            $table->string('line_pan',50);
            $table->string('master_name',50);
            $table->string('pod_code',50);
            $table->string('last_port1',50);
            $table->string('last_port2',50);
            $table->string('last_port3',50);
            $table->char('vessel_type1');
            $table->integer('poa');
            $table->string('cargo_des1',50);
            $table->dateTime('date_time');
            $table->string('light_house',50);
            $table->integer('igm_india_terminal_id');
            $table->char('same_bottom');
            $table->char('passenger_list');
            $table->char('ship_stores');
            $table->char('crew_effect');
            $table->char('crew_list');
            $table->char('maritime');
            $table->string('vessel_name',50);
            $table->string('arrival_date',50);
            $table->string('igm_number',50);
            $table->string('nationality',50);
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
        Schema::dropIfExists('igm_indias');
    }
};
