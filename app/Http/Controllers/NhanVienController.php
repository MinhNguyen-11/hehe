<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dangNhap(Request $request)
    {
        $check = Auth::guard('nhan_vien')->attempt([
            'email'             => $request->email,
            'password'          => $request->password,
        ]);

        if($check) {
            $nhan_vien = Auth::guard('nhan_vien')->user();

            return response()->json([
                'status'    => true,
                'message'   => 'Đăng nhập thành công!',
                'token'     => $nhan_vien->createToken('token_nhan_vien')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Tài khoản hoặc mật khẩu không đúng!'
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $hash_active    = Str::uuid();
        NhanVien::create([
            'ho_va_ten'     => $request->ho_va_ten,
            'email'         => $request->email,
            'so_dien_thoai' => $request->so_dien_thoai,
            'password'      => bcrypt($request->password),
            'hash_active'   => $hash_active,
        ]);
        return response()->json([
            'status' => true,
            'message' => 'Bạn Đã Đăng Kí Tài Khoản Thành Công'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function kiemTraAdmin(Request $request)
    {
        $tai_khoan_dang_dang_nhap   = Auth::guard('sanctum')->user();
        if($tai_khoan_dang_dang_nhap && $tai_khoan_dang_dang_nhap instanceof \App\Models\NhanVien) {
            return response()->json([
                'status'    =>  true
            ]);
        } else {
            return response()->json([
                'status'    =>  false,
                'message'   =>  'Bạn cần đăng nhập hệ thống trước'
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
