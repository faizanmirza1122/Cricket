<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMatch extends Model
{
    use HasFactory;
    protected $fillable = ['team_1', 'team_2', 'match_type_id', 'team_1_score','team_2_score','team_1_match_result','team_2_match_result','date','match_start_time','match_end_time','team_1_matchup_heading_1','team_1_matchup_title_1','team_1_matchup_heading_2','team_1_matchup_title_2','team_1_matchup_heading_3','team_1_matchup_title_3','team_2_matchup_heading_1','team_2_matchup_title_1','team_2_matchup_heading_2','team_2_matchup_title_2','team_2_matchup_heading_3','team_2_matchup_title_3','general_stats_map_heading','general_stats_map_title','general_stats_mission_heading','general_stats_mission_title','general_stats_duration_heading','general_stats_duration_title'
];


    public function team1(){
        return $this->hasMany(Team::class, 'id', 'team_1');
    }

    public function team2(){
        return $this->hasMany(Team::class, 'id', 'team_2');
    }

    public function matchType(){
        return $this->hasOne(MatchType::class, 'id', 'match_type_id');
    }
}
