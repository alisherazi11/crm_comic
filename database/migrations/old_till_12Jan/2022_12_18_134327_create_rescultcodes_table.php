<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRescultcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rescultcodes', function (Blueprint $table) {
            $table->id();
            $table->string('result_code')->nullable();
            $table->string('result_description')->nullable();
            $table->string('result_group')->nullable();
            $table->string('active')->nullable();
            $table->string('result_action')->nullable();
            $table->string('dialing_action')->nullable();
            $table->string('user_assignment')->nullable();
            $table->string('lead_status')->nullable();
            $table->string('require_comments')->nullable();
            $table->string('recording')->nullable();
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
        Schema::dropIfExists('rescultcodes');
    }
}
