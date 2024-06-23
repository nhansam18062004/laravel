<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function user()
    {
        $Categories = Categories::all();
        return view('user', compact('Categories'));
    }

    public function register(Request $request)
    {
        $messages = [
            'name.required' => 'Tên đăng nhập là bắt buộc.',
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email phải là một địa chỉ email hợp lệ.',
            'email.unique' => 'Email này đã được sử dụng.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.min' => 'Mật khẩu phải dài ít nhất :min ký tự.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
        ];
        $validata=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], $messages);
        $User= User :: create($validata);
        Auth::login($User);
        return redirect()->route('home');

    }
    public function login(Request $request)
    {
        $login = $request->only('name', 'password');
      
        if (Auth::attempt($login)) {
            if ( Auth::user()->role === 'Admin') {
               
                return redirect()->route('admin');
            } else {
           
                return redirect()->route('home');
            }
        }

        return redirect()->back()->withInput()->withErrors(['name' => 'Thông tin đăng nhập không chính xác']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function capnhat()
    {        
        $Categories = Categories::all();
        return view('capnhat', compact('Categories'));
    }
    public function capnhatform(Request $request)
    {        
        $user = Auth::user();

        $validata=$request->validate([
            'hovaten' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'diachi' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->hovaten = $request->hovaten;
   

        $user->update($validata);

        return redirect()->route('home')->with('success', 'Thông tin đã được cập nhật thành công');
    }
   
}
