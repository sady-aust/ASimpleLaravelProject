<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function Index(){
        $categories = Category::where("publicationstatus",1)->get();

        $products = Product::where("publicationstatus",1)
                            ->orderBy("id","DESC")
                            ->take(8)
                            ->get();


        return view("front-end.home.home",[
            "categories"=>$categories,"products"=>$products
        ]);
    }

    public function categoryProduct($id){
        $products = Product::where("category_id",$id)
                            ->where("publicationstatus",1)
                            ->get();


        return view("front-end.category.category-content",["products"=>$products]);
    }

    public function mailUs(){
        return view("front-end.mail.mailus");
    }


}
