<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('driver_name');
            $table->string('address');
            $table->string('phone_number');
            $table->integer('department_id');
            $table->string('personal_identity_number')->nullable();
            $table->string('personal_identity_type')->nullable();
            $table->string('personal_identity_image')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('license_number');
            $table->integer('license_type');
            $table->date('license_issue_date');
            $table->date('license_expired_date');
            $table->date('joining_date')->nullable();
            $table->string('gender')->nullable();
            $table->integer('is_active')->nullable();
            $table->integer('userid');
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
        Schema::dropIfExists('drivers');
    }
}
