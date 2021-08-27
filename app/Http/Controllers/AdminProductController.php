<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{

    //
    function add()
    {
        DB::table('products')->insert([
            'name' => 'iphone8',
            'content' => 'nội dung mô tả iphone 8',
            'user_id' => 4,
            'price' => 15000000,
            'product_cat_id' => 1
        ]);
    }
    function show()
    {
        $product = DB::table('products')->select('*')->get();
        return $product;
    }
    function update($id)
    {
        DB::table('products')
        ->where('id',$id)
        ->update([
            'price' =>30000000]);
    }
    function delete($id)
    {
        DB::table('products')
        ->where('id',$id)
        ->delete();
    }
}
