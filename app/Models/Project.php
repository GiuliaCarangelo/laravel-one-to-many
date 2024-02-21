<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'programming_languages',
        'repo_url',
        'creation_day',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function technology(){
        return $this->belongsTo(Technology::class);
    }
}

