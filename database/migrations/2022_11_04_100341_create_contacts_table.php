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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('first_name')->nullable()->default('first_name');
            $table->string('last_name')->nullable()->default('last_name');
            $table->string('username')->nullable()->default('username');
            $table->string('email')->nullable()->default('email')->unique();
            $table->string('title')->nullable()->default('title');
            $table->text('description')->nullable()->default('description');
            $table->text('address')->nullable()->default('address');
            $table->string('city')->nullable()->default('city');
            $table->string('state')->nullable()->default('state');
            $table->string('zip')->nullable()->default('zip');
            $table->string('country')->nullable()->default('country');
            $table->string('business_number')->nullable()->default('business_number');
            $table->string('mobile_number')->nullable()->default('mobile');
            $table->integer('sms_opt')->nullable()->default(0);
            $table->string('lead_status')->nullable()->default('lead_status');
            $table->string('call')->nullable()->default('call');
            $table->string('lead_source')->nullable()->default('lead_source');
            $table->string('lead_source_email')->nullable()->default('lead_souce_email');
            $table->string('time_zone')->nullable()->default('time_zone');
            //lead details
            $table->string('dba')->nullable()->default('dba');
            $table->string('type_of_business')->nullable()->default('type_of_business');
            $table->string('business_for')->nullable()->default('business_for');
            $table->string('monthly_revenuenow')->nullable()->default('monthly_revenuenow');
            $table->string('looking_for')->nullable()->default('looking_for');
            $table->string('money_for')->nullable()->default('money_for');
            $table->string('set_it_up')->nullable()->default('set_it_up');
            //app deatail
            $table->string('tax_id')->nullable()->default('tax_id');
            $table->date('date_of_birth')->nullable();
            $table->string('social_number')->nullable()->default('social_number');
            $table->string('credit')->nullable()->default('credit');
            $table->string('paid_now')->nullable()->default('paid_now');
            $table->string('paid_in')->nullable()->default('paid_in');
            $table->string('balances')->nullable()->default('balances');
            $table->text('home_address')->nullable()->default('home_address');
            $table->string('city1')->nullable()->default('city');
            $table->string('state2')->nullable()->default('state');
            $table->string('zip2')->nullable()->default('zip');
            $table->string('bank_account')->nullable()->default('bank_account');
            $table->string('partner')->nullable()->default('partner');
            $table->string('is_owner')->nullable()->default('is_owner');
            $table->string('llc')->nullable()->default('llc');
            $table->string('asap')->nullable()->default('asap');
            //additional detail
             
            $table->string('founded_amount')->nullable()->default('founded_amount');
            $table->string('upsell_percentage')->nullable()->default('upsell_percentage');
            $table->string('upsell_amount')->nullable()->default('upsell_amount');
            $table->string('commission')->nullable()->default('commission');
            $table->string('psf')->nullable()->default('psf');
            $table->string('total_sale_amount')->nullable()->default('total_sale_amount');
            $table->string('revenue')->nullable()->default('revenue');
            $table->string('previous_funded_amount')->nullable()->default('defaull');
            $table->string('id_number')->nullable()->default('id_number');
            $table->string('cap')->nullable()->default('default');
            $table->string('term')->nullable()->default('default');
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
        Schema::dropIfExists('contacts');
    }
};
