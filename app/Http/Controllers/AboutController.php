<?php
namespace App\Http\Controllers;

use App\Models\Aboutus;
use App\Models\Page;
use App\Models\PageContent;
use Illuminate\Http\Request;

class AboutController extends Controller
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
        $content=Aboutus::first();
        return view('about',compact('content'));
    }

}
