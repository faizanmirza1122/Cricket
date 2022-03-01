<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_1')->constrained('teams');
            $table->foreignId('team_2')->constrained('teams');
            $table->foreignId('match_type_id')->constrained();
            $table->string('team_1_score')->nullable();
            $table->string('team_2_score')->nullable();
            $table->string('team_1_match_result')->nullable();
            $table->string('team_2_match_result')->nullable();
            $table->date('date')->nullable();
            $table->time('match_start_time')->nullable();
            $table->time('match_end_time')->nullable();
            $table->string('team_1_matchup_heading_1')->nullable();
            $table->text('team_1_matchup_title_1')->nullable();
            $table->string('team_1_matchup_heading_2')->nullable();
            $table->text('team_1_matchup_title_2')->nullable();
            $table->string('team_1_matchup_heading_3')->nullable();
            $table->text('team_1_matchup_title_3')->nullable();

            $table->string('team_2_matchup_heading_1')->nullable();
            $table->text('team_2_matchup_title_1')->nullable();
            $table->string('team_2_matchup_heading_2')->nullable();
            $table->text('team_2_matchup_title_2')->nullable();
            $table->string('team_2_matchup_heading_3')->nullable();
            $table->text('team_2_matchup_title_3')->nullable();

            $table->string('general_stats_map_heading')->nullable();
            $table->text('general_stats_map_title')->nullable();
            $table->string('general_stats_mission_heading')->nullable();
            $table->text('general_stats_mission_title')->nullable();
            $table->string('general_stats_duration_heading')->nullable();
            $table->text('general_stats_duration_title')->nullable();
            $table->string('general_stats_status_heading')->nullable();
            $table->text('general_stats_status_title')->nullable();
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
        Schema::dropIfExists('team_matches');
    }
}
