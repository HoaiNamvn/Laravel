<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\facades\cart;

class CartController extends Controller
{
    //
    function show()
    {
        return view('cart.show');
    }
    function add(Request $request, $id)
    {
        // Cart::destroy();
        #lấy tất cả dữ liệu của sản phẩm có id đã được gửi
        $product = Product::find($id);
        // return $product;
        # đổ dữ liệu
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            // 'options' => ['size' => 'large']
        ]);
        return redirect('cart/show');

        // echo "thêm sản phâm {$id} vào giỏ hàng  ";
    }
}
