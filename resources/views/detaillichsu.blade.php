@extends('layout')
@section('title','Giỏ hàng | Pet Shop')
@section('title2','Danh sách sản phẩm')
@section('content')
<div class="container-full mb-5 " style="height:100%">
    <div class="container mt-5 " >
        <div class="row " >
            <div class="col-3  text-center bg-white shadow rounded-2" style="height:600px">
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
            <div class="col-9 mb-5">
            <h4>Mã đơn hàng: {{ $cart->order_code }}</h4>
                <div class="container">
              
                    <table class="table">
                        <thead>
                            <tr >
                                <th scope="col">STT</th>
                                <th scope="col">Hình</th>
                                <th scope="col">Tên hàng</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($cart->details as $detail)

                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{ asset('hinh/' . $detail->image) }}" width="50"></td>
                                <td>{{ $detail->name }}</td>
                                <td>{{ $detail->quantity }}</td>
                                <td>{{ number_format($detail->price, 0, ',', '.') }} đ</td>
                                <td>{{ number_format($detail->thanhtien, 0, ',', '.') }} đ</td>
                                
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="5" class="text-center">Tổng</td>
                            <td>{{ number_format($cart->total_price, 0, ',', '.') }} đ </td>
                        </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')