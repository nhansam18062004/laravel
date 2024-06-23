@extends('layout')
@section('title','Giỏ hàng | Pet Shop')
@section('title2','Danh sách sản phẩm')
@section('content')
<div class="container-full mb-5 " style="height:100%">
    <div class="container mt-5 " >
        <div class="row " >
            <div class="col-3  text-center bg-white shadow rounded-2">
            <span class="d-inline-flex justify-content-center align-items-center rounded-circle border border-dark mt-2" style="width: 50px; height: 50px;">
                <h3 class="text-black m-3 "><i class="fa-regular fa-user fa-sm "></i> </h3>
            </span>
                <hr class="bg-black  w-75 m-auto mt-3">
                <div class="p-3  ">
                    <h5><a href="/capnhat" class="text-black text-decoration-none lh-lg"><i class="fa-solid fa-house"></i>
                           Thông tin cá nhân</a></h5>
                           <h5><a href="/lichsudonhang" class="text-black text-decoration-none lh-lg"><i
                                class="fa-brands fa-shopify"></i></i> Lịch Sử  Đơn Hàng</a></h5>
                           <h5><a href="" class="text-black text-decoration-none lh-lg"><i class="fa-solid fa-bars"></i>
                            Danh sách yêu thích</a></h5>
              
                 
                </div>
         

            </div>
            <div class="col-6 mb-5">
                <div class="container">
                    <h3 class="text-center"> Thông tin cá nhân</h3>
                    <form action="{{ route('capnhatform') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="hovaten">Họ và Tên <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="hovaten" id="hovaten"
                                value="{{ old('hovaten', Auth::user()->hovaten) }}" required>
                            @error('hovaten')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Mật Khẩu Mới <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" id="password">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Xác Nhận Mật Khẩu Mới <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                        </div>
                        <div class="form-group">
                            <label for="diachi">Địa Chỉ <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="diachi" id="diachi" value="{{ old('diachi', Auth::user()->diachi) }}" require>
                            @error('diachi')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" id="email"
                                value="{{ old('email', Auth::user()->email) }}" required>
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Cập Nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')