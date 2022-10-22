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
        Schema::create('igm_india_cargo_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('igm_id');
            $table->string('pod2',50);
            $table->string('imo2',50);
            $table->string('call_sign2',50);
            $table->integer('igm_india_voyage_id');
            $table->integer('line_number');
            $table->integer('bill_of_landing_id');
            $table->string('pol_code',50);
            $table->string('pol_code_sub',50);
            $table->string('final_destination',50);
            $table->string('vessel_type2',50);
            $table->string('other_cargo',50);
            $table->string('local_cargo',50);
            $table->string('local_sfc',50);
            $table->integer('total_packages');
            $table->string('pkg_units',50);
            $table->decimal('total_gross',10,2);
            $table->string('gross_units',50);
            $table->string('marks_numbers',50);
            $table->longText('cargo_des2');
            $table->string('cargo_class',50);
            $table->string('ul_number',50);
            $table->integer('rail_number');
            $table->string('rail_operator',50);
            $table->string('train_road',50);
            $table->string('pan_number',50);
            $table->integer('client_id_consignee');
            $table->integer('client_id_notify');
            $table->integer('unit_count');
            $table->longText('shipping_from');
            $table->longText('remarks');
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
        Schema::dropIfExists('igm_india_cargo_infos');
    }
};
