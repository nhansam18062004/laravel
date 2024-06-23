<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use App\Models\User;
use App\Models\Cart;

class TKController extends Controller
{
    public function tk(){
        $Products = Products :: orderBy('sold','DESC')->limit(3)->get();
        $orders=Cart::orderBy('created_at','desc')->limit(5)->get();
        $Users=User::orderBy('created_at','desc')->limit(5)->get();

        return view('admin.thongke',compact('Products','orders','Users'));
    }
  
    public function dh(){
        $orders=Cart::orderBy('created_at','desc')->paginate(15);
        return view('admin.donhang',compact('orders'));
    }
    public function dhupdate(Request $request, $id)
    {
        $order = Cart::findOrFail($id);
        $order->status = $request->input('status');
        $order->save();

        return redirect()->route('dhadmin')->with('success', 'Cập nhật trạng thái đơn hàng thành công.');
    }
    public function detaildh(Request $request, $id){
        $order= Cart::findOrFail($id);
        return view('admin.detaildonhang',compact('order'));
    }
    public function user(){
        $User = User :: orderBy('id','DESC')->paginate(6);
        return view('admin.taikhoan',compact('User'));
    }
    public function tkdelete($id){
        $User = User :: find($id);
        $User->delete();
        return redirect()->route('tkadmin');
    }
    public function dm(){
        $Categories=Categories :: orderBy('id','desc')->paginate(8);
        return view('admin.danhmuc',compact('Categories'));
    }
    public function dmdelete($id){
            $Categories = Categories :: find($id);
           
            $Categories->delete();
            return redirect()->route('dmadmin');
    }
    public function dmupdate(Request $request, $id)
        {
            $Categories = Categories::find($id);

            $validated = $request->validate([
                'name' => 'required|string|max:255',

            ]);

            $Categories->update($validated);

            return redirect()->back()->with('success', 'Sản phẩm đã được cập nhật thành công!');
        }

    public function dmadminadd(Request $request){
        $validata=$request->validate([
            'name'=> 'required|string|max:255',
        ]);
        $Categories= Categories :: create($validata);
        
        return redirect()->route('dmadmin');

    }
}
