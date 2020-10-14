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
        'name', 'email', 'password', 'role'
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

    public function hasRole($roleName)
    {
        switch ($roleName) {
            case 'admin':
                return $this->role_id === 1;
                break;
            case 'ketuarw':
                return $this->role_id === 2;
                break;
            
            case 'ketuart':
                return $this->role_id === 3;
                break;

            case 'sekertarisrw':
                return $this->role_id === 4;
                break;
            case 'sekertarisrt':
                return $this->role_id === 5;
                break;

            case 'bendahararw':
                return $this->role_id === 6;
                break;

                
            case 'bendaharart':
                return $this->role_id === 7;
                break;


            default: return false;
        }
    }
}
