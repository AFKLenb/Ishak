<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $table = "heroes";

    protected $fillable = [
        'title',
        'description',
        'plus',
        'plusOne',
        'plusTwo',
        'plusTree',
        'image'
    ];
}
