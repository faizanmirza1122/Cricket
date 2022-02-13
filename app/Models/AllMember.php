<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllMember extends Model
{
    use HasFactory;

    protected $fillable = ['designation', 'name', 'age', 'joining_date', 'image', 'country', 'description', 'social_media_link_1', 'social_media_link_2', 'social_media_link_3'];
}
