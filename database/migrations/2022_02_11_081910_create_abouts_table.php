<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('side_logo_1');
            $table->string('title');
            $table->string('subtitle');
            $table->longtext('description');
            $table->string('image');
            $table->string('why_us_title');
            $table->string('why_us_description');
            $table->string('logo_1');
            $table->text('logo_number_1');
            $table->string('logo_name_1');
            $table->string('logo_2');
            $table->text('logo_number_2');
            $table->string('logo_name_2');
            $table->string('logo_3');
            $table->text('logo_number_3');
            $table->string('logo_name_3');
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
        Schema::dropIfExists('abouts');
    }
}
