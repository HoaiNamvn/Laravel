<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // Thêm khai báo request
    function add(Request $request)
    { //1.Thêm data cho sesion
        // $request->session()->put('username', 'hoainam');
        // $request->session()->put('login', true);
        # Lưu thông qua helper session
        session(['username' => 'hoainam1']);

        // return redirect('session/show');
    }
    function show(Request $request)
    { //2.  Lấy toàn bộ session
        // return $request->session()->all();
        //3. lấy username value
        // if ($request->session()->has('username')) {
        //     echo "saved username in session ";
        // }
        // return $request->session()->get('username');
        // return $request->session()->get('status');
        # dùng helper sesion helper
        return session('username');
    }
    function add_flash(Request $request)
    {
        // 4.lưu sesion sau 1 phiên làm việc thì nó tự dông mất đi lưu trũ tạm
        $request->session()->flash('status', 'Bạn dã thêm sản phẩm thành công !');
        return redirect('session/show');
    }
    function delete(Request $request)
    {   //5. Xóa một session cụ thể
        // $request->session()->forget('username');
        //6.Xóa tất cả sesion
        $request->session()->flush();
    }
}
