<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_name');
            $table->integer('merk_id');
            $table->integer('jenis_id');
            $table->integer('type_id');
            $table->string('police_no');
            $table->string('call_sign');
            $table->string('vin_no');
            $table->string('engine_no');
            $table->string('transmition');
            $table->string('year_build');
            $table->datetime('operation_date');
            $table->string('fuel');
            $table->string('cylinder');
            $table->string('plat_color');
            $table->string('stnk_no');
            $table->date('stnk_expired_date');
            $table->string('pajak');
            $table->date('pajak_expired_date');
            $table->string('kir');
            $table->date('kir_expired_date');
            $table->string('b3_no')->nullable();
            $table->date('b3_expired_date')->nullable();
            $table->string('b3_limbah_no')->nullable();
            $table->date('b3_limbah_expired_date')->nullable();
            $table->string('b3_bbm_no')->nullable();
            $table->date('b3_bbm_expired_date')->nullable();
            $table->string('handak_no')->nullable();
            $table->date('handak_expired_date')->nullable();
            $table->integer('insurance_company_id')->nullable();
            $table->date('insurance_expired_date')->nullable();
            $table->string('location')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
