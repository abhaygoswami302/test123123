<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempUsers extends Model
{
    use HasFactory;

    protected $table = 'temp_users';

    protected $fillable = [
        'flag',
        'name',
        'username',
        'email',
        'membership',
        'csrf_token',
        'password',
        'location',
        'login_status',
        'last_login_timestamp',
        'image',
        'gender',
        'email_verified_at',
    ];
}
