<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\Page;
use App\Models\Categories;
use App\Models\ProductSlider;
use App\Models\ProductFeature;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index(Request $request,$slug='')
    {
        
        if($slug)
        {
            $catinfo=Categories::where([['status','=','1'],['slug','=',$slug]])->get()->first();
           // dd($catinfo);
            $products=Product::where([['status','=','1'],['category_id','=',$catinfo->id]])->orderby('orderby','asc')->get();
        }
        else
        {
            $products=Product::where('status','=','1')->orderby('orderby','asc')->get();
        }
        
        $pageobj=Page::where('slug','=','product')->orderby('id','asc')->get();
        if($pageobj->count() > 0)
        {
            $pageinfo = $pageobj->first();
        }
        else
        {
            $pageinfo="";
        }
        return view('product-listing',compact('products','pageinfo'));
    }

    public function productinfo($slug)
    {
        
        $products=Product::where([['status','=','1'],['slug','=',$slug]])->orderby('orderby','asc')->get();
        dd($products);
        if($products->count() > 0)
        {
            $productsinfo = $products->first();
            $category_id = $productsinfo->category_id;
            $products=Product::where([['status','=','1'],['id','!=',$productsinfo->id]])->orderByRaw('RAND()')->limit(10)->get();
            $relatedproduct=Product::where([['status','=','1'],['id','!=',$productsinfo->id],['category_id','=',$category_id]])->orderby('orderby','asc')->get();
        }
        else
        {
            $productsinfo='';$relatedproduct='';
        }
        return view('product',compact('productsinfo','products','relatedproduct'));
    }

}
