<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use App\Models\cart;
use App\Models\detailcart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class CartController extends Controller
{
    public function themgiohang(Request $request, $id)
    {
        $userId =  Auth::id();
        $product = Products::findOrFail($id);

        $cart = session()->get("cart_$userId", []);

        // dd($userId,$cart);

        // Kiểm tra nếu sản phẩm đã tồn tại trong giỏ hàng
        if(isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            // Thêm sản phẩm mới vào giỏ hàng
            $cart[$product->id] = [
                "id"=>$product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
       
        }
        foreach ($cart as &$item) {
            $item['total_price'] = $item['quantity'] * $item['price'];
        }    
   
        session()->put("cart_$userId", $cart);

        return redirect()->back()->with('success', 'Sản phẩm được thêm vào giỏ hàng thành công.');
    }
   
    public function xoagiohang(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $userId = Auth::id();
        $cart = session()->get("cart_$userId", []);
        if(isset($cart[$product->id])) {
            unset($cart[$product->id]);
            session()->put("cart_$userId", $cart);
        }
        return redirect()->back();
    }

    public function cart(){
        $Categories=Categories :: all();
        $userId = Auth::id();
        $cart = session()->get("cart_$userId", []);
        $tongsoluong = array_sum(array_column($cart, 'quantity'));
      
        $tong = 0;
        foreach ($cart as $item) {
            $tong += $item['price'] * $item['quantity'];
        }
            return view('cart',compact('Categories','cart','tongsoluong','tong'));
    }
    public function thanhtoan(){
        $userId = Auth::id();
        $cart = session()->get("cart_$userId", []);
        $tong = 0;
        foreach ($cart as $item) {
            $tong += $item['price'] * $item['quantity'];
        }
        return view('thanhtoan',compact('cart','tong'));
    }
    public function shopping(Request $request)
    {
        $user = Auth::id();
        $isGuest = false;

        if (!$user) {
            $isGuest = true;
            $user = null; // hoặc null nếu cột user_id chấp nhận giá trị null
        }
        $cart = session()->get("cart_$user", []);
        $totalPrice = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        $orderCode = Str::random(10);

        $order = cart::create([
            'user_id' => $user,
            'order_code' => $orderCode,
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'payment_method' => $request->input('payment_method'),
            'status' => 'Đang được chuẩn bị	',
            'voucher' => $request->input('voucher'),
            'note' => $request->input('note'),
            'total_price' => $totalPrice,
        ]);

        foreach ($cart as $item) {
            detailcart::create([
                'cart_id' => $order->id,
                'product_id' => $item['id'],
                'name' => $item['name'],
                'image' => $item['image'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'thanhtien' => $item['total_price'],
            ]);
        }

        session()->forget("cart_$user");
        session()->put('order_code', $orderCode);
        return redirect()->route('bill');
    }
    public function bill() {
        $Categories=Categories :: all();
        $orderCode = session()->get('order_code');
        return view('bill',compact('Categories','orderCode'));
    }
    public function lichsudonhang(){
        
        $Categories = Categories::all();
        $user = Auth::user();
        $orders = $user->carts()->orderBy('created_at', 'desc')->get();
        return view('lichsudonhang', compact('orders', 'Categories'));
    }
    public function show($id)
    {
        $Categories = Categories::all();
        $cart = Cart::findOrFail($id);
       
       
        return view('detaillichsu', compact('cart','Categories'));
    }
}
