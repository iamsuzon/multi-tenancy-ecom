<?php

namespace App\Models\Landlord;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'avatar',
        'status',
        'last_login_ip',
        'email_verified_at',
        'last_login_at',
    ];

    protected $casts = [
        'name' => 'string',
        'username' => 'string',
        'email' => 'string',
        'password' => 'string',
        'avatar' => 'string',
        'status' => 'boolean',
        'last_login_ip' => 'string',
        'email_verified_at' => 'datetime',
        'last_login_at' => 'datetime',
    ];
}
