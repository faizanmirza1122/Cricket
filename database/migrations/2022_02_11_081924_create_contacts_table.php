<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
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
            $table->text('map');
            $table->string('title');
            $table->string('contact_info');
            $table->longText('description');
            $table->string('general_inquries_title');
            $table->text('general_inquries_email');
            $table->text('social_link_1');
            $table->text('social_link_2');
            $table->text('social_link_3');
            $table->string('join_team_title');
            $table->longText('join_team_description');
            $table->string('be_our_partner_text');
            $table->text('be_our_partner_email');
            $table->unsignedInteger('user_id')->nullable();
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
}
