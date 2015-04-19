<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Rhumsaa\Uuid\Uuid;

class User extends BaseModel implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'username', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($user)
        {
            $user->id = Uuid::uuid4();

            Profile::create([
                'user_id' => $user->id
            ]);
        });
    }

    public function profile()
    {
        return $this->hasOne(Profile::class, 'id', 'id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function shipping()
    {
        return $this->hasMany(Shipping::class, 'user_id', 'id');
    }

    public function setPasswordAttribute($value)
    {
        return $this->attributes['password'] = bcrypt($value);
    }

    public function hasRole($role)
    {
        $roles = is_array($role) ? $role : func_get_args();

        foreach ($this->roles as $role)
        {
            if (in_array($role, $roles))
            {

            }
        }
    }

    public function assignRole($role)
    {
        $this->roles->attach($role);
    }

    public function unassignRole($role)
    {
        $this->roles->detach($role);
    }

    public function getAvatarUrl()
    {
        if ($this->attributes['avatar'] === null)
        {
            return '//gravatar.com/avatar/'.md5($this->attributes['email']);
        }

        return $this->attributes['avatar'];
    }
}
