<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nama tabel (opsional, kalau tabel di DB bernama 'users' defaultnya sudah cocok)
    protected $table = 'users';

    // Kolom yang bisa diisi massal
    protected $fillable = [
        'role',
        'username',
        'email',
        'no_hp',
        'password',
    ];

    // Kolom yang disembunyikan saat dikembalikan sebagai array/json
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
