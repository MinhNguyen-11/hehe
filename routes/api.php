<?php

use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhanVienController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/admin/dang-ky',[NhanVienController::class,'create']);
Route::post('/admin/dang-nhap',[NhanVienController::class,'dangNhap']);
Route::get('/admin/kiem-tra-admin', [NhanVienController::class, 'kiemTraAdmin']);

Route::post('/trang-chu/create', [KhachHangController::class, 'create']);



