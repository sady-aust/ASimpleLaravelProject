<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{
    //

    public function index(){
        return view("admin.home.home");
    }

    public function dashboard(){
        return view("admin.dashboard.dashboard");
    }

    public function addcategory(){
        return view("admin.category.addcategory");
    }

    public function managecategory(){

        $categories = Category::all();
        //return $categories;
        return view("admin.category.managecategory",["categories"=>$categories]);
    }

    public function savecategory(Request $request){

        //Approch1 ORM

       $category = new Category();
       $category->categoryname = $request->categoryname;
       $category->categorydescription = $request->categorydescription;
       $category->publicationstatus = $request->publicationstatus;
        $category->save();

      //Approch2 ORM
        //Category::create($request->all());

       //Approch3 in Query builder
        /*DB::table('categories')->insert([
            'categoryname'=>$request->categoryname,
            'categorydescription'=>$request->categorydescription,
            'publicationstatus'=>$request->publicationstatus,
        ]);*/

        return redirect("/addcategory")->with("message","Category Info Saved");
    }


    public function editpublicationstatus($id){
        $category = Category::find($id);
        $category->publicationstatus = $category->publicationstatus==1 ? 0:1;
        $category->save();

        return redirect("/managecategory")->with("message","Category status updated");

    }

    public function editcategory($id){
        $category = Category::find($id);
        return view("admin.category.editcategory",["category"=>$category]);
    }
}
