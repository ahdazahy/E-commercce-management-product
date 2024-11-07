<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Periksa apakah Anda mengimpor ini
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable // Pastikan User mengextend Authenticatable
{
    use HasFactory, Notifiable;

    // Definisi atribut mass assignable dan lainnya
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
