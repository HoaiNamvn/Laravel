<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    function create(){
        return view("admin.post.create");
    }

    //cap nhat bai viet al
    function update($id){
        return view("admin.post.update",compact('id'));
    }
    // hien thi bai viet
    function show(){
        return view("admin.post.list") ;
    }
    // xoa bai viet 
   
}
