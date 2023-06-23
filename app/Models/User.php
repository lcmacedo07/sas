<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use SoftDeletes, HasFactory, Notifiable, HasApiTokens;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'fullname',
        'genre',
    ];

    protected $hidden = [
        'password'
    ];
}