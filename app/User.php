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
                return $this->role_id == 1 || $this->role_id == 2;
                break;

            case 'manajemen_rt':
                return true;
                break;

            case 'manajemen_rt_01':
                return $this->role_id == 1 || $this->role_id == 2 || $this->role_id == 3 || $this->role_id == 6;
                break;

            case 'manajemen_rt_02':
                return $this->role_id == 1 || $this->role_id == 2 || $this->role_id == 4 || $this->role_id == 7;
                break;

            case 'manajemen_rt_03':
                return $this->role_id == 1 || $this->role_id == 2 || $this->role_id == 5 || $this->role_id == 8;
                break;

            case 'admin':
                return $this->role_id === 1;
                break;

            case 'rw':
                return $this->role_id === 2;
                break;

            case 'rt_01':
                return $this->role_id === 3;
                break;

            case 'rt_02':
                return $this->role_id === 4;
                break;
            
            case 'rt_03':
                return $this->role_id === 5;
                break;
            
            case 'warga_01':
                return $this->role_id === 6;
                break;
            
            case 'warga_02':
                return $this->role_id === 7;
                break;
            
            case 'warga_03':
                return $this->role_id === 8;
                break;

            default: return false;
        }
    }

    public function role() {
        return $this->belongsTo('App\Role');
    }
}
