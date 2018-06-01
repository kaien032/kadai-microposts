<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function be_favorited()
    {
        return $this->belongsToMany(User::class, 'user_favorites', 'favorite_id', 'user_id')->withTimestamps();
    }
}
