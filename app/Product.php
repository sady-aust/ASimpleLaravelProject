<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['category_id',"brand_id",
                            "productname","productprice",
                        "productquantity","shortdescription",
                            "longdescription","imagedirectory","publicationstatus"];
}
