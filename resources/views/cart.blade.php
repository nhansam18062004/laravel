@extends('layout')
@section('title','Giỏ hàng | Pet Shop')
@section('title2','Danh sách sản phẩm')
@section('content')
<div class="container-full ">
    <div class="container">
        <div class="row">
            <div class="col-8 p-5">
                <div class="row ">
                    <div class="col-6">
                        <h3>Giỏ hàng của bạn</h3>
                    </div>
                    <div class="col-6 mt-2">Bạn đang có <strong> {{ $tongsoluong }} sản phẩm </strong>trong giỏ hàng</div>
                </div>
                <div class="border rounded-3 ">
                @if(count($cart) > 0)
                    <ul>
                    @foreach ($cart as $pr)
                                <div class="row p-3" >
                                    <div class="col-1 mt-5  text-center">
                                        <a href="{{route('xoagiohang',$pr['id'])}}">
                                        <button class="rounded-pill bg-white border-1" ><i
                                                class="fa-solid fa-xmark"></i></button>
                                        </a>
                                        
                                    </div>
                                    <div class="col-2 p-3">
                                        <a href="">
                                            <img src="{{asset('hinh/' . $pr['image'])}}" class="border" width="100px" alt="">
                                        </a>
                                    </div>
                                    <div class="col-5 p-3">
                                        <h6>{{ $pr['name'] }}</h6>
                                        <p>400g</p>
                                        <p class="text-secondary">{{ number_format($pr['price'],0,',','.') }} đ</p>
                                    </div>
                                    <div class="col-3 mt-4 text-center ">
                                        <strong>{{ number_format($pr['price']*$pr['quantity'],0,',','.') }} đ</strong>

                                        <div class="input-group ">
                                            <button class="input-group-text bg-white" min="1" max="10"
                                                >-</button>
                                            <input type="text" min="1" max="10" value="{{$pr['quantity']}}"
                                                class="form-control text-center" aria-label="Amount (to the nearest dollar)">
                                            <button class="input-group-text bg-white" min="1" max="10"
                                                >+</button>
                                        </div>
                                    </div>
                                </div>
                    @endforeach
                    </ul>
                @else
                    <p class="text-center">Giỏ hàng của bạn đang trống.</p>
                @endif
            
                </div>
                <div class="mt-4">
                    <label for="exampleFormControlTextarea1" class="form-label">Ghi chú đơn hàng</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <button class="bg-white  border-1 rounded-1"><a href="/sanpham" 
                                class="text-black text-decoration-none"><i class="fa-solid fa-arrow-left"></i>Tiếp tục
                                mua hàng</a></button>
                    </div>
                    <div class="col-3">
                        <button class=" text-white border-1 rounded-1 bg-black bg-opacity-75">Xoá
                            giỏ hàng</button>
                    </div>
                </div>
            </div>

            <div class="col-4 border-start border-1 p-5">
                <h5>Thông tin đơn hàng</h5>
                <hr>
                <input type="text" placeholder="Mã ưu đãi"
                    class="border-secondary-subtle text-secondary rounded-2 p-2 w-100">
                <button class="mt-3  border-0 rounded-1 w-100 text-white bg-black bg-opacity-75"
                    ><strong>Áp dụng</strong></button>
                <li class="mt-3">Phí vận chuyển sẽ được miễn phí.</li>    
                <div class="row mt-3">
                    <div class="col-8">Tạm tính</div>
                    <div class="col-4">{{number_format($tong,0,',','.')}} đ</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8">Tổng</div>
                    <div class="col-4 text-success"><strong>{{number_format($tong,0,',','.')}} đ</strong></div>
                </div>
                @if(!empty($cart))
                    <a href="/thanhtoan"><button class="bg-success border-0  text-white rounded-1 mt-3 w-100 p-1"><strong>THANH
                        TOÁN</strong></button></a>
                
                @else
                    <a href=""><button class="bg-success border-0  text-white rounded-1 mt-3 w-100 p-1"><strong>THANH
                        TOÁN</strong></button></a>
                
               @endif
            </div>
        </div>
    </div>
   
</div>
@endsection('content')