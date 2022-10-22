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
        Schema::create('igm_carriers', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id');
            $table->String('customs_office_code',50);
            $table->String('place_of_destination_code',50);
            $table->integer('sender_id');
            $table->String('pan_number',50);
            $table->String('receiver_id',50);
            $table->date('version_no');
            $table->integer('client_id_shipper');
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
        Schema::dropIfExists('igm_carriers');
    }
};
