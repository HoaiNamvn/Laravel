<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HelperController extends Controller
{
    //
    function url()
    {
        // 1.Tạo ra 1 url cơ bản
        // $url = url('login');
        // 2.Tạo url qua route
        // $url = route('post.show');
        //3.Tạo url qua action của controller
        // $url = action('PostController@store');
        //4.lấy url current
        // $url  = url()->current();

        $url = secure_url('user/profile');

        // Get the current URL including the query string...
        // echo url()->full();

        // Get the full URL for the previous request...
        // echo url()->previous();
        echo $url;
    }
    function string()
    {
        # https://laravel.com/docs/7.x/helpers
        //1.Lấy độ dài của chuổi
        $str_1 = "Unitop.vn";
        echo Str::length($str_1);
        echo "<br>";
        //2.In thường 1 chuổi
        $str_2 = "in thường in hoa";
        echo Str::lower($str_2);
        echo "<br>";
        //3.In hoa
        echo Str::upper($str_2);
        echo "<br>";
        //4.Tạo chuổi ngẩu nhiên
        echo Str::random(10);
        echo "<br>";
        //5.Loại bỏ khoảng trắng
        echo Str::of("  Unitop.vn    hoainam   ")->trim();
        echo "<br>";
        //6.Làm slug link thân thiện
        // Unitop.vn hoc web di lam ->Unitop.vn-hoc-web-di-lam
        $str = Str::slug('Unitop.vn học web đi làm ');
        echo $str . "<br>";
        //7. Lấy chuổi con trong một chuỗi
        echo Str::of('Unitop laravel')->substr(7);
        echo "<br>";
        echo Str::of('Unitop laravel')->substr(0, 6) . "<br>";
        //8.Nối chuổi vào đuôi
        echo Str::of('Đoàn Hoài ')->append('Nam');
        echo "<br>";
        //9. Tìm kiếm thay thế chuổi
        $str = "Laravel 7x";
        echo Str::of($str)->replace('7x', '8x');
        //10.Cắt chuỗi với số kí tự cho trước
        $str = "Nữ sinh đắc lắc nỗi tiếng vì quá xinh đẹp";
        echo "<br>";
        echo Str::of($str)->limit(10, '...');
        //11.Kiểm tra chuổi cha có chứa chuổi con không có sẽ trả về 1 ,hoặc k có j
        $str = "Đây là đoạn văn mẫu ";
        echo Str::contains($str, 'văn');
    }
}
