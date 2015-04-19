<?php namespace App;

class Role extends BaseModel
{
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
