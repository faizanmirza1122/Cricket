<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function players(){
        return $this->hasMany(Player::class, 'team_id');
    }

    public function match1(){
        return $this->belongsTo(Match::class, 'team_1');
    }

    public function match2(){
        return $this->belongsTo(Match::class, 'team_2');
    }

}
