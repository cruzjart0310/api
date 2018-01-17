<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setNameAttribute($valor)
    {
        $this->attributes['name'] = strtolower($valor);
    }

    public function getNameAttribute($valor)
    {
        return ucwords($valor);
    }

    //1. .*
    public function profile()
    {
        return $this->hasOne('App\UserProfile');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'roles_permissions', 'role_id', 'permission_id');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Permission', 'users_permissions', 'user_id', 'permission_id');
    }
}
