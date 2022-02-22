<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();

            $table->string('player_name');
            $table->string('slug');
            $table->string('player_age');
            $table->date('player_since');
            $table->string('player_born_country');
            $table->string('player_team');
            $table->string('player_role');
            $table->text('player_description');
            $table->string('player_social_link_1')->nullable();
            $table->string('player_social_link_2')->nullable();
            $table->string('player_social_link_3')->nullable();
            $table->string('player_social_link_4')->nullable();
            $table->foreignId('team_id')->constrained('teams');


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
        Schema::dropIfExists('players');
    }
}
