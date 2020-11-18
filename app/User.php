<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password','username','prenom','roles_id','img',
    ];
    public function domain()
    {
        return $this->belongsToMany(Domain::class);
    }
     public function role(){
        return $this->belongsTo('App\Role' ,'roles_id');
    }
     public function bug()
    {
        return $this->hasMany(Bug::class);
    }

     public function Comment()
    {
        return $this->hasMany(Comment::class);
    }

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
}
