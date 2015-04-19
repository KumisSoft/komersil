<?php namespace App;

class Province extends BaseModel
{
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
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
