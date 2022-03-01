<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function match(){
        return $this->belongsTo(TeamMatch::class, 'id', 'match_type_id');
    }
}
