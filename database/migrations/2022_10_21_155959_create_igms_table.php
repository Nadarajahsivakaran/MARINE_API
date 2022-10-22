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
        Schema::create('igms', function (Blueprint $table) {
            $table->id();
            $table->integer('bill_of_landing_id');
            $table->String('customs_office_code',50);
            $table->integer('igm_india_voyage_id');
            $table->date('date_of_departure');
            $table->date('date_of_arrival');
            $table->time('time_of_arrival');
            $table->integer('total_number_of_bols');
            $table->integer('total_number_of_packages');
            $table->integer('total_number_of_containers');
            $table->decimal('total_gross_mass',10,2);
            // $table->integer('client_id_carrier');
            $table->integer('consolidated_cargo');
            $table->String('place_of_loading_code',50);
            $table->String('place_of_unloading_code',50);
            $table->String('exporter_name',50);
            $table->longText('exporter_address');
            $table->integer('number_of_packages');
            $table->String('package_type_code',50);
            $table->decimal('gross_mass',10,2);
            $table->longText('shipping_marks');
            $table->decimal('volume_in_cubic_meters',10,2);
            $table->integer('num_of_ctn_for_this_bol');
            $table->integer('mode_of_transport_code');
            $table->String('identity_of_transporter',50);
            $table->String('nationality_of_transporter_code',50);
            $table->String('slpa_ref_number',50);
            $table->String('bol_reference',50);
            $table->integer('line_number');
            $table->integer('bol_nature');
            $table->String('bol_type_code',50);
            $table->String('place_of_departure_code',50);
            $table->String('place_of_destination_code',50);
            $table->String('unique_carrier_reference',50);
            $table->integer('client_id_carrier');
            $table->integer('client_id_notify');
            $table->integer('client_id_cosignee');
            $table->integer('freight_value');
            $table->String('freight_currency',50);
            $table->longText('goods_description');
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
        Schema::dropIfExists('igms');
    }
};
