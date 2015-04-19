<?php namespace App;

class Comment extends BaseModel
{
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
