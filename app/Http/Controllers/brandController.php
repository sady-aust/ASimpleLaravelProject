<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;

class brandController extends Controller
{
    public function AddBrand(){
        return view("admin.addbrand.addbrand");
    }

    public function AddANewBrand(Request $request){
             $brand = new Brand();
             $brand->brandname = $request->brandname;
             $brand->branddescription = $request->branddescription;
             $brand->brandstatus = $request->brandstatus;

             $brand->save();

             return redirect("/addbrand")->with("message","Branded added");
    }

    public function ManageBrand(){
        $brands = Brand::all();

        return view("admin.addbrand.managebrand",["brands"=>$brands]);
    }

    public function UpdateBrandStatus($id){
        $brand  = Brand::find($id);
        $brand->brandstatus = $brand->brandstatus==1 ? 0:1;

        $brand->save();

        return redirect("/managebrand")->with("message","Brand status upated");

        //return $brand;
    }

    public function EditBrand($id){
        $brand = Brand::find($id);
        return view("admin.addbrand.editbrand",["brand"=>$brand]);
    }

    public function EditaBrand(Request $request){
       $brand = Brand::find($request->id);


       $brand->brandname = $request->brandname;
       $brand->branddescription = $request->branddescription;
       $brand->brandstatus = $request->brandstatus;

       $brand->save();

       return redirect("/managebrand")->with("message","Brand Info Updated");
    }

    public function deletebrand($id){
        $brand = Brand::find($id);
        $brand->delete();
        return redirect("/managebrand")->with("message","Brand Deleted");
    }
}
