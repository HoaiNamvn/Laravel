<?php

namespace App\Http\Controllers; // không gian hoạt động của lớp productcontroller 

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function show($id){
       // return " show product ".$id;
       $price = 50000;
       $color =['red','orange','purpule'];
        return view('product.show',compact('id','price','color'));
    }
    function create($id){
       // return " show product ".$id;
        return view('product.create');
    }
    function update($id){
        return "update product".$id;
    }
}
