<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        KhachHang::create([
            'ho_va_ten'        =>$request->ho_va_ten,
            'email'        =>$request->email,
            'so_dien_thoai'        =>$request->email,
            'so_phong'     =>$request->so_phong,
            'so_nguoi_lon'     =>$request->so_nguoi_lon,
            'ngay'     =>$request->ngay,
            'thang'        =>$request->thang,
            'nam'      =>$request->nam,
            'ghi_chu'      =>$request->ghi_chu,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã Cập Nhật Thông Tin Khách Hàng " . $request->ho_va_ten . " Thành Công, Chúng Tôi Sẽ Liên lạc Lại Sớm Nhất Có Thể",
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
    public function show(KhachHang $khachHang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KhachHang $khachHang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KhachHang $khachHang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KhachHang $khachHang)
    {
        //
    }
}
