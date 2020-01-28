<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function favorite_users()
    {
        return $this->belongsToMany(Question::class, 'favorites', 'question_id', 'user_id')->withTimestamps();
    }
}
