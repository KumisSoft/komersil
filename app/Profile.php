<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Profile extends BaseModel implements AuthenticatableContract
{
    use Authenticatable;

    protected $fillable = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }
}
