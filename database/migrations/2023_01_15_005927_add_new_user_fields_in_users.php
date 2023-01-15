<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewUserFieldsInUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('local_area_code')->nullable();
            $table->string('pre_dial')->nullable();
            
            $table->integer('user_type')->nullable()->comment="1=caller, 2=adminitrator_combo, 3=limited";
            $table->boolean('auto_dialing')->nullable();
            $table->boolean('with_call_recording')->nullable();

            $table->boolean('add_voip_line_to_user')->nullable()->comment="1=I have an existing VS VoIP, 2=Create new VS VoIP, 3=No VS VoIP line fo r now";

            $table->integer('time_zone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
