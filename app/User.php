<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

//use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;

//    use HasApiTokens, Notifiable;

    public function phone(){
        return $this->hasOne('App\Phone');
    }

    public function roles(){
        return $this->belongsToMany('App\Role');
    }

    public function image(){
        return $this->morphOne('App\Image','imageable');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
