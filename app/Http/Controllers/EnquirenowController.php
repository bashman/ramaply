<?php
namespace App\Http\Controllers;

use App\Models\ContactPage;
use Illuminate\Http\Request;
use App\Models\Product;
class EnquirenowController extends Controller
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
        $contact=ContactPage::first();
        $product = $request->input('product');
        $products=Product::select('title')->where('status','=','1')->orderby('orderby','asc')->get();
        return view('enquirenow',compact('contact','product','products'));
    }

}
