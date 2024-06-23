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
            <div class="col-8 mb-5">
                <div class="container">
                @if($orders->isEmpty())
                    <p class="text-center pt-5">Bạn chưa có đơn hàng nào.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr >
                                <th scope="col">Mã đơn hàng</th>
                                <th scope="col">Ngày đặt hàng</th>
                                <th scope="col">Tổng giá trị</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->order_code }}</td>
                                    <td>{{ $order->created_at->format('d/m/Y') }}</td>
                                    <td>{{ number_format($order->total_price, 0, ',', '.') }} đ</td>
                                    <td>{{ $order->status }}</td>
                                    <td><a href="{{ route('show', $order->id) }}"class='text-danger text-decoration-none'>Xem chi tiết</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')