<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Session;
use Mail;


class cartController extends Controller
{
    //
    public function addtocart(Request $request){
        $product = Product::find($request->productid);

        if(Session::get("cart") == null){
            $cartItem =[
                "id"=>$product->id,
                "productName"=>$product->productname,
                "price"=>$product->productprice,
                "quantity"=>(int)$request->quantity,
                "image"=> $product->imagedirectory
                ];

            Session::put("cart",array($cartItem));


        }
        else{
            $cartItemitems =Session::get("cart") ;
            $cartItemitems[sizeof($cartItemitems)] =[
                "id"=>$product->id,
                "productName"=>$product->productname,
                "price"=>$product->productprice,
                "quantity"=>(int)$request->quantity,
                "image"=> $product->imagedirectory
            ];

            Session::put("cart",($cartItemitems));


        }

        return redirect("/show-cart");

    }

    public function viewcart(){
        $cartItems = Session::get("cart");

        return view("front-end/cart/cart",["cartItems"=>$cartItems]);
    }

    public function SendMail(){
      $data = [
          "First Name"=>"Toufiqul",
          "Last Name"=>"Islam",
          "UserName"=>"Moro",
          "mail"=>"sadydic@gmail.com"
      ];

      Mail::send('front-end.mails.confirmationmail',$data,function ($message) use ($data){
          $message->to($data["mail"]);
          $message->subject('Confirmation Mail');
      });

    return "Success";


    }


}
