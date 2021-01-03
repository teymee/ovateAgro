<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function article()
    {
        return $this->hasMany(Article::class);
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasAnyRoles($roles)
    {
        if ($this->role()->whereIn('name', $roles)->first()) {
            return true;
        }else{
            return false;
        }

    }

    public function hasRole($role)
    {
        if ($this->role()->where('name' , $role)->first()){
            return true;
        }else{
            return false;
        }
    }

    public function Order(){
        return $this->hasMany(Order::class);
    }
}


