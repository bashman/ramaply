<?php
namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Client;
use App\Models\PageContent;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

  public function page(Request $request,$slug)
  {
        $page=Page::where('slug','=',$slug)->first();
        if($page)
        {
            $clients="";
            $contents = $page->forntpagecontent;
            $templatename = $slug;
            if($slug=='clients'){
                $clients=Client::where([['status','=','1']])->orderby('orderby','asc')->get();
            }
            if(view()->exists($templatename))
            {
                return view($templatename, compact('page', 'contents','clients'));
            }
            else
            {
                return view('page', compact('page', 'contents'));
            }
            
            
        }
        else
        {
            return view('comingsoon');
        }
  }

}
