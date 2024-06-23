<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;

class ProductController extends Controller
{ 
    public function spbanchay(Request $request){
        // $Categories=Categories::Categories();
        // $Product=Products::Products();
        $query = $request->input('keywork');
        $category_id = $request->input('category_id');
        $Products = Products :: orderBy('sold','DESC')->paginate(12);
        $Categories=Categories :: all();
        // ['Products' => $Product],['Categories' => $Categories]
        return view('product.list', compact('Products','Categories','query','category_id') );
    }
    public function spdog(Request $request){
  
        $query = $request->input('keywork');
        $category_id = $request->input('category_id');
        $Products = Products :: where('name','REGEXP', '(^|[^a-zA-Z])chó([^a-zA-Z]|$)')->orderBy('id','DESC')->paginate(12);
        $Categories=Categories :: all();
     
        return view('product.spchocho', compact('Products','Categories','query','category_id') );
    }
    public function spmeo(Request $request){
  
        $query = $request->input('keywork');
        $category_id = $request->input('category_id');
        $Products = Products :: where('name','REGEXP', '(^|[^a-zA-Z])mèo([^a-zA-Z]|$)')->orderBy('id','DESC')->paginate(12);
        $Categories=Categories :: all();
     
        return view('product.spchomeo', compact('Products','Categories','query','category_id') );
    }
    public function detail(request $request){
        $product_id = $request->product_id;
        $Product = Products::find($product_id);
        $Products = Products :: where('category_id', '=', $Product->category_id)->orderBy('id','ASC')->limit(4)->get();

        $Categories=Categories :: all();
        return view('detail',compact('Product','Categories','Products'));

    }
  
    public function getproductByCategories(request $request){
        $Products = Products :: where('category_id',$request->category_id)->where('name', 'REGEXP', '(^|[^a-zA-Z])chó([^a-zA-Z]|$)')->orderBy('id','DESC')->paginate(12);
        $Categories=Categories :: all();
        $query = $request->input('keywork');
        $category_id = $request->input('category_id');

        return view('product.spchocho', compact('Products','Categories','query','category_id') );
    }
    public function getproductByCategories2(request $request){
        $Products = Products :: where('category_id',$request->category_id)->where('name', 'REGEXP', '(^|[^a-zA-Z])mèo([^a-zA-Z]|$)')->orderBy('id','DESC')->paginate(12);
        $Categories=Categories :: all();
        $query = $request->input('keywork');
        $category_id = $request->input('category_id');

        return view('product.spchomeo', compact('Products','Categories','query','category_id') );
    }
    public function search(Request $request)
    {
        $Categories=Categories :: all();
        $query = $request->input('keywork');
        $category_id = $request->input('category_id');
        $Products = Products::where('name', 'LIKE', "%$query%")
                            ->orWhere('description', 'LIKE', "%$query%")
                            ->paginate(12);

        return view('product.list', compact('Products','Categories','query','category_id'));
    }


}
