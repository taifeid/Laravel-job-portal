<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'experience',
        'description',
        'city',
        'by',
    ];

}
