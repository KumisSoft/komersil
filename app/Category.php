<?php namespace App;

class Category extends BaseModel
{
    protected $fillable = ['name'];

    public function sub_category()
    {
        return $this->hasMany(Item::class);
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
