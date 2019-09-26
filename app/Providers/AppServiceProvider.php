<?php

namespace App\Providers;

use App\Models\FrontMenu;
use App\Models\Product;
use App\Models\Categories;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $frontmainmenus=FrontMenu::where('status','=','1')->where('headerstatus','=','1')->where('parent_id','=','0')->orderby('orderby','asc')->get();
        $productsmenu=Categories::where([['status','=','1'],['parent_id','=','0']])->orderby('orderby','asc')->get();
        $productsfooter=Categories::where([['status','=','1']])->orderby('orderby','asc')->get();
        view()->composer('*', function($view) use($frontmainmenus,$productsmenu,$productsfooter) {
            $view->with('frontmainmenus',$frontmainmenus)->with('productsmenu',$productsmenu)->with('productsfooter',$productsfooter);
        });
    }
}
