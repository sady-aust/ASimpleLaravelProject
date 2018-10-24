<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Cart;

class cartController extends Controller
{
    //
    public function addtocart(Request $request){
        $product = Product::find($request->productid);
        Cart::add($product->id, $product->productname, $product->productprice, (int)$request->quantity, [
            'img' => $product->imagedirectory
        ]);
        $cartItems = Cart::content();
        return Cart::count();

      //  return redirect("/show-cart");
    }

    public function viewcart(){
        $cartItems = Cart::content();
        return $cartItems;
       // return view("front-end/cart/cart");
    }


}
