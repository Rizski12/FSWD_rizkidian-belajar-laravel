<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroups extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_name',
        'created_by',
        'updated_by',
        'is_active',
        'description',
    ];

        // Definisi relasi dengan Users
        public function users()
        {
            return $this->hasMany(Users::class, 'group_id');
        }
}
