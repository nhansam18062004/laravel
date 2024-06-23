<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apiProductsModel as Products;


class apiProductsController extends Controller
{
    public function index()
    {
        return Products::all();
    }
    public function show($id){
        return Products::find($id);
    }
    public function spbanchay(){
        return Products::orderBy('sold', 'desc')->limit(10)->get();

    }
    public function spdog(Request $request){
        return Products :: where('name','REGEXP', '(^|[^a-zA-Z])chó([^a-zA-Z]|$)')->orderBy('id','DESC')->limit(10)->get();
    }
    public function spmeo(Request $request){
    
        return Products :: where('name','REGEXP', '(^|[^a-zA-Z])mèo([^a-zA-Z]|$)')->orderBy('id','DESC')->paginate(12);
    }

    public function store(Request $request){
       
        $Products= Products :: create($request->all());   
        return response()->json($Products, 201);
    }
    public function update(Request $request, $id)
    {
        $Products = Products::findOrFail($id);
       
        $Products->update($request->all());
        return response()->json($Products, 200);
    }
    public function destroy($id){
        $Products = Products :: find($id);
        $Products->delete();
        return response()->json(null, 204);

}
}
