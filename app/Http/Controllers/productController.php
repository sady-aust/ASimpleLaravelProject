<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use DB;
use Illuminate\Http\Request;
use Image;
class productController extends Controller
{
    //
    public function AddProduct(){
        $categories = Category::where("publicationstatus",1)->get();
        $brands = Brand::where("brandstatus",1)->get();

        return view("admin.product.addProduct",[
            "categories"=>$categories,
            "brands"=>$brands
        ]);

    }

    public function AddAProduct(Request $request){


       $productImage = $request->file("productimage");
       // $imageName = $productImage->getClientOriginalName();
        $extension = $productImage->getClientOriginalExtension();
        $imageName = $request->productname.".".$extension;
        $directory = "product-image/";
        $url = $directory.$imageName;

        //$productImage->move($directory,$imageName);

        //Saving image using intervention.io package
        Image::make($productImage)->save($url);


        $product = new Product();
        $product->category_id = $request->categoryid;
        $product->brand_id = $request->brandid;
        $product->productname = $request->productname;
        $product->productprice = $request->productprice;
        $product->productquantity = $request->productquantity;
        $product->shortdescription = $request->shortdescription;
        $product->longdescription = $request->longdescription;
        $product->imagedirectory = $directory.$imageName;
        $product->publicationstatus = $request->publicationstatus;
        $product->save();



        return redirect("/addproduct")->with("message","Product Save");
    }

    public function ManageProduct(){
        $products = DB::table("products")
                        ->join("categories","products.category_id","=","categories.id")
                        ->join("brands","products.brand_id","=","brands.id")
                        ->select("products.*","categories.categoryname","brands.brandname")
                        ->get();

        return view("admin.product.manageproduct",["products"=>$products]);
    }
}
