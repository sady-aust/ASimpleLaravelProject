<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function Index(){
        return view("front-end.home.home");
    }

    public function categoryProduct(){
        return view("front-end.category.category-content");
    }

    public function mailUs(){
        return view("front-end.mail.mailus");
    }
}
