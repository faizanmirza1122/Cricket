<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug');
            $table->string('subtitle');
            $table->string('country');
            $table->text('final_score');
            $table->string('team_matchup_heading_1')->nullable();
            $table->text('team_matchup_title_1')->nullable();
            $table->string('team_matchup_heading_2')->nullable();
            $table->text('team_matchup_title_2')->nullable();
            $table->string('team_matchup_heading_3')->nullable();
            $table->text('team_matchup_title_3')->nullable();
            $table->enum('match_result', ['win', 'loss'])->nullable();
            $table->date('since');
            $table->text('prize_earned');
            $table->text('description');
            $table->string('sidebar_icon')->nullable();
            $table->string('icon')->nullable();
            $table->string('image')->nullable();

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
        Schema::dropIfExists('teams');
    }
}
