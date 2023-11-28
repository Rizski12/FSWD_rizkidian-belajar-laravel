<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\UserGroups;

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
    public function group()
    {
        return $this->belongsTo(UserGroups::class, 'group_id');
    }
}