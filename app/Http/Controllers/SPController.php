<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;

class SPController extends Controller
{
    public function sp(){
            $Products = Products :: orderBy('id','DESC')->paginate(6);
            $Categories=Categories :: orderBy('id','DESC')->get();
            return view('admin.sanpham', compact('Products','Categories') );
    }
    public function spdelete($id){
            $Products = Products :: find($id);
            $imgpath="hinh/".$Products->image;
            if (file_exists($imgpath)) {
                unlink($imgpath);
            }
            $Products->delete();
            return redirect()->route('spadmin');
    }
    public function spupdate(Request $request, $id)
        {
           
            $product = Products::find($id);
            // if (!$product) {
            //     return redirect()->back()->withErrors(['error' => 'Product not found.']);
            // }
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'image' => 'sometimes|file|mimes:jpeg,png,jpg,webp,svg|max:2048', // 'required' đổi thành 'sometimes' để cho phép không cập nhật ảnh
                'price' => 'required|numeric',
                'category_id' => 'required|integer|exists:categories,id',
                'quantity' => 'nullable|numeric',
            ]);
          
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('hinh'), $imageName);
                $validated['image'] = $imageName;

                $oldImagePath = public_path('hinh/' . $product->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            } else {
                // Giữ nguyên ảnh cũ nếu không có ảnh mới được tải lên
                $validated['image'] = $product->image;
            }
           

            $product->update($validated);

            return redirect()->route('spadmin');
        }

    public function spadminadd(Request $request){
        $validata=$request->validate([
            'name'=> 'required|string|max:255',
            'image'=> 'required|file|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'price'=> 'required|numeric',
            'category_id'=> 'required|integer|exists:categories,id',
        ]);
        if ($request->hasfile('image')) {
            $imageName= time().'.'.$request->image->extension();
            $request->image->move(public_path('hinh'),$imageName);
            $validata['image']=$imageName;
        }
        $Products= Products :: create($validata);
        
        return redirect()->route('spadmin');

    }
    
}
