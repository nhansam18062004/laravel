<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Categories;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
       
        $Dog=Products:: where('name','REGEXP', '(^|[^a-zA-Z])chó([^a-zA-Z]|$)')->orderBy('id', 'desc')->limit(8)->get();
        $Cat=Products:: where('name', 'REGEXP', '(^|[^a-zA-Z])mèo([^a-zA-Z]|$)')->orderBy('id', 'desc')->limit(8)->get();
        $Sold=Products:: orderBy('sold', 'desc')->limit(4)->get();
        $Categories=Categories :: all();
        return view('home',compact('Dog','Cat','Sold','Categories'));
    }

}
