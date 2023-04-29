<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'available_time',
        // add any other relevant fields here
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
