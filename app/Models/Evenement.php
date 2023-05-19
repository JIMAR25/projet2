<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $fillable = [
        'title',
        'content',
        'photos'
    ];

   
}
