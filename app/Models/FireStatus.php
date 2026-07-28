<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FireStatus extends Model
{
    protected $fillable = [
        'status',
        'confidence',
        'person',
        'system'
    ];
}