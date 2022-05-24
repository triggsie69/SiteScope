<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'role_id',
        'organisation_id',
        'site_id',
    ];
}
