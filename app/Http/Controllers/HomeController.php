<?php
namespace App\Http\Controllers;

use App\Models\Aboutus;
use App\Models\Award;
use App\Models\Blog;
use App\Models\Client;
use App\Models\HomePage;
use App\Models\HomeProduct;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $banners=Slider::where('status','=','1')->orderby('orderby','asc')->get();
        $about=Aboutus::first();
        $awards=Award::where('status','=','1')->orderby('orderby','asc')->get();
        $clients=Client::where([['status','=','1'],['featured','=','1']])->orderby('orderby','asc')->get();
        $testimonials=Testimonial::where('status','=','1')->orderby('orderby','asc')->get();
        $homeproduct1=HomeProduct::where('status','=','1')->where('orderby','=','1')->orderby('orderby','asc')->first();
        $homeproduct2=HomeProduct::where('status','=','1')->where('orderby','=','2')->orderby('orderby','asc')->first();
        $homeproduct3=HomeProduct::where('status','=','1')->where('orderby','=','3')->orderby('orderby','asc')->first();
        $homeproduct4=HomeProduct::where('status','=','1')->where('orderby','=','4')->orderby('orderby','asc')->first();
        $homeproduct5=HomeProduct::where('status','=','1')->where('orderby','=','5')->orderby('orderby','asc')->first();
        $homeproduct6=HomeProduct::where('status','=','1')->where('orderby','=','6')->orderby('orderby','asc')->first();
        $homeproduct7=HomeProduct::where('status','=','1')->where('orderby','=','7')->orderby('orderby','asc')->first();
        $homeproduct8=HomeProduct::where('status','=','1')->where('orderby','=','8')->orderby('orderby','asc')->first();
        $homeproduct9=HomeProduct::where('status','=','1')->where('orderby','=','9')->orderby('orderby','asc')->first();
        $blogs=Blog::where('status','=','1')->orderby('orderby','asc')->get();
        $homepage=HomePage::first();
        return view('welcome',compact('about','banners','clients','homeproduct1','homeproduct2','homeproduct3','homeproduct4','homeproduct5','homeproduct6','homeproduct7','homeproduct8','homeproduct9','blogs','awards','testimonials','homepage'));
    }

    public function home(Request $request){
        $banners=Slider::where('status','=','1')->orderby('orderby','asc')->get();
        $about=Aboutus::first();
        $awards=Award::where('status','=','1')->orderby('orderby','asc')->get();
        $clients=Client::where([['status','=','1'],['featured','=','1']])->orderby('orderby','asc')->get();
        $testimonials=Testimonial::where('status','=','1')->orderby('orderby','asc')->get();
        $homeproduct1=HomeProduct::where('status','=','1')->where('orderby','=','1')->orderby('orderby','asc')->first();
        $homeproduct2=HomeProduct::where('status','=','1')->where('orderby','=','2')->orderby('orderby','asc')->first();
        $homeproduct3=HomeProduct::where('status','=','1')->where('orderby','=','3')->orderby('orderby','asc')->first();
        $homeproduct4=HomeProduct::where('status','=','1')->where('orderby','=','4')->orderby('orderby','asc')->first();
        $homeproduct5=HomeProduct::where('status','=','1')->where('orderby','=','5')->orderby('orderby','asc')->first();
        $homeproduct6=HomeProduct::where('status','=','1')->where('orderby','=','6')->orderby('orderby','asc')->first();
        $homeproduct7=HomeProduct::where('status','=','1')->where('orderby','=','7')->orderby('orderby','asc')->first();
        $homeproduct8=HomeProduct::where('status','=','1')->where('orderby','=','8')->orderby('orderby','asc')->first();
        $homeproduct9=HomeProduct::where('status','=','1')->where('orderby','=','9')->orderby('orderby','asc')->first();
        $blogs=Blog::where('status','=','1')->orderby('orderby','asc')->get();
        $homepage=HomePage::first();
        return view('home',compact('about','banners','clients','homeproduct1','homeproduct2','homeproduct3','homeproduct4','homeproduct5','homeproduct6','homeproduct7','homeproduct8','homeproduct9','blogs','awards','testimonials','homepage'));
    }

}
