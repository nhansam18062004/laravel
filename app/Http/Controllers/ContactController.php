<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class ContactController extends Controller
{
    public function contact(){
        $Categories=Categories :: all();
        return view('lienhe',compact('Categories'));
    }
}
