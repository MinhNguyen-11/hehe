<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class NhanVien extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $table = 'nhan_viens';
    protected $fillable = [
        'ho_va_ten',
        'email',
        'so_dien_thoai',
        'password',
        'hash_reset',
        'hash_active',
    ];
}
