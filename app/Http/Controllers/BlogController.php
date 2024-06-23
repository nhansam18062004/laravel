<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class BlogController extends Controller
{
    public function blog(){
        $Categories=Categories :: all();
        return view('tintuc',compact('Categories'));
    }
}
