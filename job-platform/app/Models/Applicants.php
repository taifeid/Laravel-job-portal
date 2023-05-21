<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone_number',
        'position',
        'transfer',
        'desc',
        'resume',
    ];
}
