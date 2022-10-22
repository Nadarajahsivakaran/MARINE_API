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
        Schema::create('igm_lanka_dos', function (Blueprint $table) {
            $table->id();
            $table->integer('bill_of_landing_id');
            $table->longText('serial_number');
            $table->integer('client_id_forwarding_agent');
            $table->integer('client_id_consignee');
            $table->date('do_expire');
            $table->integer('igm_india_voyage_id');
            $table->date('date_issue');
            $table->integer('vendor_id_warhouse');
            $table->integer('port_id_loading');
            $table->string('package_type',50);
            $table->integer('number_pkg');
            $table->string('number_in_word',50);
            $table->integer('twft');
            $table->integer('foft');
            $table->integer('foft_over');
            $table->integer('vendor_id_yard');
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
        Schema::dropIfExists('igm_lanka_dos');
    }
};
