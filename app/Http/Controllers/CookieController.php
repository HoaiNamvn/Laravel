<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    //
    function set()
    { //1.Set 1 cookie
        $response = new Response();

        return  $response->cookie('unitop', 'Học web đi làm', 24 * 60);
    }
    function get(Request $request)
    { //2.lấy một cookei
        return $request->cookie('unitop');
    }
}
