<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->text('field_name')->nullable();
            $table->text('field_tab')->nullable();
            $table->text('field_status')->nullable();
            $table->text('field_visible')->nullable();
            $table->text('field_permissions_caller_edit')->nullable();
            $table->text('field_permissions_caller_search')->nullable();
            $table->text('field_type')->nullable();
            $table->text('field_data_lenght_min')->nullable();
            $table->text('field_data_lenght_mx')->nullable();
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
        Schema::dropIfExists('fields');
    }
}
