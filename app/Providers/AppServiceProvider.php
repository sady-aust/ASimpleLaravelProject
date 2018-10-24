<?php

namespace App\Providers;
use App\Brand;
use View;
use Illuminate\Support\ServiceProvider;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::share("categories",Category::where("publicationstatus",1)->get()); //now name will be accessable from all the view
        View::share("brands",Brand::WHERE("brandstatus",1)->get());

        /*
         * For passsing data to a specific view
         * we can also use * to pass the data to all the view
         *
         */

       /* View::composer("front-end.home.home",function ($view){
            $view->with("name","Toufiqul Islam");
        });*/



       /* View::composer("front-end.category.category-content",function ($view){
            $view->with("categories",Category::where("publicationstatus",1)->get());
        });*/

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
