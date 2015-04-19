<?php namespace App;

class Address extends BaseModel
{
    protected $table = 'shipping_address';

    public function user()
    {
        return $this->belongsTo(User::class)->withTimestamps();
    }
}
