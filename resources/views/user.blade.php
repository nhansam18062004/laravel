@extends('layout')
@section('title','Tài khoản | Pet Shop')
@section('content')
<div class="container-fluid mb-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-5 ">
                    <div class="card p-4">
                        <h3 class="text-center">ĐĂNG NHẬP</h3>
                        <form action="{{route('login')}}" method="POST" >
                        @csrf
                       
                        <div class="form-group">
                                <label for="name">Tên đăng nhập <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Tên đăng nhập...">
                               
                            </div>
                            <div class="form-group">
                                <label for="password">Mật khẩu <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu...">
                               
                            </div>
                            @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            <button type="submit" class="btn btn-success btn-block" >Đăng nhập</button>
                        </form>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <hr class="flex-grow-1 mr-2">
                            <a href="" class="text-black text-decoration-none"> Quên mật khẩu </a>
                            <hr class="flex-grow-1 ms-2">
                        </div>
                       
                    </div>
                </div>
               <div class="col-md-2 d-flex justify-content-center align-items-center ">
                    <div class="vertical-line">
                        <span class="or">Or</span>
                    </div>
                </div>
                <div class="col-md-5 ">
                    <div class="card p-4">
                    <h3 class="text-center">ĐĂNG KÝ</h3>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Tên đăng nhập <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Tên đăng nhập...">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Mật khẩu <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu...">
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Nhập lại mật khẩu <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Nhập lại mật khẩu...">
                            </div>
                            <div class="form-group">
                                <label for="email">Email: <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email...">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success btn-block ">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection('content')