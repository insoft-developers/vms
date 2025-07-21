<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldIntoDrivers2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drivers', function (Blueprint $table) {
            $table->string('email')->after('address')->nullable();
            $table->string('agama')->after('email')->nullable();
            $table->string('rt')->after('agama')->nullable();
            $table->string('rw')->after('rt')->nullable();
            $table->string('kecamatan')->after('rw')->nullable();
            $table->string('kota')->after('kecamatan')->nullable();
            $table->string('provinsi')->after('kota')->nullable();
            $table->string('tempat_lahir')->after('provinsi')->nullable();
            $table->date('tanggal_lahir')->after('tempat_lahir')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drivers', function (Blueprint $table) {
            //
        });
    }
}
