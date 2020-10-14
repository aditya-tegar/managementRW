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
            case 'manajemen_rw':
                return $this->role_id == 1 || $this->role_id == 2 || $this->role_id == 3 || $this->role_id == 4;
                break;

            case 'admin':
                return $this->role_id === 1;
                break;
            case 'ketua_rw':
                return $this->role_id === 1 || $this->role_id === 2;
                break;

            case 'bendahara_rw':
                return $this->role_id === 1 || $this->role_id === 3;
            break;

            case 'sekertaris_rw':
                return $this->role_id === 1 || $this->role_id === 4;
                break;
            
            case 'ketua_rt_01':
                return $this->role_id === 1 || $this->role_id === 5;
                break;

            case 'bendahara_rt_01':
                return $this->role_id === 1 || $this->role_id === 6;
                break;

            case 'sekertaris_rt_01':
                return $this->role_id === 1 || $this->role_id === 7;
                break;
            
            case 'ketua_rt_02':
                return $this->role_id === 1 || $this->role_id === 8;
                break;

            case 'bendahara_rt_02':
                return $this->role_id === 1 || $this->role_id === 9;
                break;

            case 'sekertaris_rt_02':
                return $this->role_id === 1 || $this->role_id === 10;
                break;
            
            case 'ketua_rt_03':
                return $this->role_id === 1 || $this->role_id === 11;
                break;

            case 'bendahara_rt_03':
                return $this->role_id === 1 || $this->role_id === 12;
                break;

            case 'sekertaris_rt_03':
                return $this->role_id === 1 || $this->role_id === 13;
                break;


                


            default: return false;
        }
    }
}
