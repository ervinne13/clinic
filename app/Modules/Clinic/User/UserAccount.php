<?php

namespace App\Modules\Clinic\User;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserAccount extends Authenticatable
{

    use Notifiable;

    public $incrementing  = false;
    protected $table      = "user_account";
    protected $primaryKey = "username";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'display_name', 'role_name', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getDisplayName()
    {
        return $this->display_name;
    }

    public function getDisplayRole()
    {
        return $this->role_name;
    }

    public function isAdmin()
    {
        return $this->role_name == "System Administrator";
    }

}
