<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_members', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('name');
            $table->text('age');
            $table->date('joining_date');
            $table->string('country');
            $table->longText('description');
            $table->string('image')->nullable();
            $table->text('social_media_link_1');
            $table->text('social_media_link_2');
            $table->text('social_media_link_3');
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
        Schema::dropIfExists('all_members');
    }
}
