<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Rhumsaa\Uuid\Uuid;

abstract class BaseModel extends Model
{
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model)
        {
            $model->id = Uuid::uuid4();
        });

        self::saving(function ($model)
        {
            \DB::beginTransaction();
        });

        self::saved(function ($model)
        {
            \DB::commit();
        });
    }

}
