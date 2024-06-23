

@extends('layout_admin')
@section('title','Sản phẩm chi tiết | tnshop')
@section('content')
<div class="container-full">
    <div class="container">
    
    <h4>Mã đơn hàng: {{ $order->order_code }}</h4>

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
                        @foreach($order->details as $detail)

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
                            <td>{{ number_format($order->total_price, 0, ',', '.') }} đ </td>
                        </tr>
                        </tbody>
                    </table>


      

    </div>
</div>

@endsection('content')