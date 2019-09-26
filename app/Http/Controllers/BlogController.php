<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Page;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index(Request $request){
      $blogs=Blog::where('status','=','1')->orderby('orderby','asc')->get();
        $pageobj=Page::where('slug','=','media')->orderby('id','asc')->get();
        if($pageobj->count() > 0)
        {
            $pageinfo = $pageobj->first();
        }
        else
        {
            $pageinfo="";
        }
        return view('blog-list',compact('blogs','pageinfo'));
    }
    public function blogdetail(Request $request,$slug){
      $blog= Blog::where('slug','=',$slug)->first();
      return view('blogdetail',compact('blog'));
    }

}
