<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController2 extends Controller
{
    //
    function show(){
        return view('admin.post.show'); // vào file admin/pót/show.blade.php
    }
}
