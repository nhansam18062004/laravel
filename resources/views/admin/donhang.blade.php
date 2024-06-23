

@extends('layout_admin')
@section('title','Sản phẩm chi tiết | tnshop')
@section('content')
<div class="container-full">
    <div class="container">
        <table class="table">
     
                        <thead>
                            <thead class=" align-middle  ">
                            <tr>
                                <th colspan="3"><h5>Danh Sách Đơn Hàng</h5></th>
        
                            </tr>
                        </thead>
                            <tr >
                                <th>STT</th>
                                <th scope="col">Mã đơn hàng</th>
                                <th scope="col">Tên khách hàng</th>
                                <th scope="col">Tổng giá trị</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Ngày đặt hàng</th>
                                <th scope="col">Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{ $order->order_code }}</td>
                                    <td>{{$order->name}}</td>
                                    <td>{{ number_format($order->total_price, 0, ',', '.') }} đ</td>
                                    <td>
                                    <form action="{{route('dhupdate',$order->id)}}" method="POST">
                                        @csrf
                                        <select name="status">
                                            <option value="Đang được chuẩn bị" {{ $order->status == 'Đang được chuẩn bị' ? 'selected' : '' }}>Đang được chuẩn bị</option>
                                            <option value="Đang giao hàng" {{ $order->status == 'Đang giao hàng' ? 'selected' : '' }}>Đang giao hàng</option>
                                            <option value="Đã giao thành công" {{ $order->status == 'Đã giao thành công' ? 'selected' : '' }}>Đã giao thành công</option>
                                            <option value="Hủy đơn" {{ $order->status == 'Hủy đơn' ? 'selected' : '' }}>Hủy đơn</option>
                                        </select>
                                        <button type="submit" class="bg-black text-white">Cập nhật</button>
                                    </form>
                                    </td>
                                    
                                    <td>{{ $order->created_at->format('d/m/Y ') }}</td>
                                    <td><a href="{{ route('detaildh', $order->id) }}"class='text-danger text-decoration-none'>Xem chi tiết</a></td>
                                </tr>
                            @endforeach
                        </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                    {{$orders->links('pagination::default') }} 
            </ul>
        </nav>

    </div>
</div>

@endsection('content')