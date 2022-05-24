<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public const ORGADMIN = 1;
    public const SITEADMIN = 2;
    public const STOREPERSON = 3;
    public const CONSUMER = 4;

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_roles')->withPivot('organisation_id')->withTimestamps();
    }

    public function superusers()
    {
        return $this->belongsToMany(User::class, 'users_roles')->as('superusers')->withPivot('organisation_id')->withTimestamps()->wherePivot('role_id', 1);
    }
}
