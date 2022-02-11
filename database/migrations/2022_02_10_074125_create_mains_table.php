<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mains', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('logo')->nullable();
            $table->string('image')->nullable();
            $table->string('social_link_1');
            $table->string('social_link_name_1');
            $table->string('social_link_text_1');
            $table->string('social_link_2');
            $table->string('social_link_name_2');
            $table->string('social_link_text_2');
            $table->string('social_link_3');
            $table->string('social_link_name_3');
            $table->string('social_link_text_3');
            $table->string('social_link_4');
            $table->string('social_link_name_4');
            $table->string('social_link_text_4');

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
        Schema::dropIfExists('mains');
    }
}
