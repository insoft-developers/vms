<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeFieldsIntoVehicle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->string('no_lambung')->after('engine_no')->nullable();
            $table->string('no_imei')->after('no_lambung')->nullable();
            $table->integer('kapasitas_bbm')->after('no_imei')->nullable();
            $table->double('ratio_pengujian_bbm')->after('kapasitas_bbm')->nullable();
            $table->integer('is_internal')->after('ratio_pengujian_bbm')->nullable();
            $table->integer('vehicle_owner_id')->after('is_internal')->nullable();
            $table->integer('vehicle_ownership_id')->after('vehicle_owner_id')->nullable();
            $table->integer('is_active')->after('userid')->nullable();
            $table->string('alasan_tidak_aktif')->after('is_active')->nullable();
            $table->string('nama_stnk')->after('stnk_expired_date')->nullable();
            $table->string('alamat_stnk')->after('nama_stnk')->nullable();
            $table->string('no_bpkb')->after('alamat_stnk')->nullable();
            $table->integer('kapasitas_ban_serep')->after('no_bpkb')->nullable();
            $table->string('setting_km')->after('kapasitas_ban_serep')->nullable();
            $table->integer('jarak_tempuh_harian')->after('setting_km')->nullable();
            $table->string('no_gsm_gps')->after('jarak_tempuh_harian')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            //
        });
    }
}
