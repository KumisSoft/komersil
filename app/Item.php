<?php namespace App;

use Illuminate\Filesystem\Filesystem;

class Item extends BaseModel
{
    public function category()
    {
        return $this->belongsTo(Category::class)->withTimestamps();
    }

    public function creator()
    {
        $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        $this->belongsTo(User::class, 'updated_by');
    }

    public function icon()
    {
        $path = storage_path("/items/icons/{$this->id}");

        return Image::open($path);
    }

    public function image()
    {
        $path = storage_path("/items/images/{$this->id}/0.jpg");

        return Image::open($path);
    }

    public function images()
    {
        $path = storage_path("/items/images/{$this->id}/");

        return (new Filesystem())->files($path);
    }

    public function fetchBySlug($slug)
    {
        $item = self::where('slug', $slug)->firstOrFail();

        $item->increment('views');

        return $item;
    }

    public function fetchAllByCategorySlug($slug)
    {
    }
}
