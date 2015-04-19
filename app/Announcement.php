<?php namespace App;

class Announcement extends BaseModel
{
    public function creator()
    {
        $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        $this->belongsTo(User::class, 'updated_by');
    }
}
