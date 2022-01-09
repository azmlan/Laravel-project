<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'base', 'name', 'toppings',
    ];
    protected $hidden = ['created_at', 'updated_at',];

    // protected $table = 'some_name';
    // this property calles (Casts)
    protected $casts = [
        'toppings' => 'array'
    ];
}
