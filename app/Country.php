<?php namespace App;

class Country extends BaseModel
{
    public function cities()
    {
        return $this->hasManyThrough(City::class, Province::class);
    }

    public function creator()
    {
        $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        $this->belongsTo(User::class, 'updated_by');
    }
}
