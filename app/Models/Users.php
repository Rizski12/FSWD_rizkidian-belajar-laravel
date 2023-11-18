<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'username',
        'password',
        'last_login_at',
        'created_by',
        'updated_by',
        'group_id',
        'is_active',
    ];

    // ...
}