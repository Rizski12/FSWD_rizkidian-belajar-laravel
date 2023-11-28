<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'created_by',
        'updated_by',
        'is_active',
    ];

    public function products()
    {
        return $this->hasMany(Products::class, 'category_id');
    }
}
