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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('title');
            $table->string('description');
            $table->string('price')->nullable();
            $table->string('type');
            $table->string('outcome');
            $table->time('time_from');
            $table->date('date_from');
            $table->time('time_to')->nullable();
            $table->time('date_to');
            $table->tinyInteger('all_day')->default(0);
            $table->string('location');
            $table->string('invites')->nullable();
            $table->string('phone_number')->nullable();
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
        Schema::dropIfExists('appointements');
    }
};
