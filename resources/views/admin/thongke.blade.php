

@extends('layout_admin')
@section('title','Sản phẩm chi tiết | tnshop')
@section('title2','Danh sách sản phẩm')
@section('content')
<div class="container-full mt-2" >
   
        <h4 >Thống Kê</h4>
        <div class="row text-center ">
            <div class="col bg-danger-subtle rounded-3 m-3 ">
                Tổng tài khoản <br>
                {{count($Users)}}
               
            </div>
            <div class="col bg-info-subtle rounded-3 m-3">
                Tổng sản phẩm <br>
                {{count($Products)}}

            </div>
            <div class="col bg-success-subtle rounded-3 m-3">
                Tổng danh mục <br>
                
            </div>
            <div class="col bg-success-subtle rounded-3 m-3">
                Tổng doanh thu <br>
            </div>
        </div>
    
        <div class="row ">
            <div class="col">
                <H4 class="text-center">Bảng doanh thu theo tháng</H4>
                <canvas id="salesChart" width="200" height="100px"></canvas>

            </div>
            <div class="col float-end ">
                <h4 class="text-center">Đơn hàng mới nhất</h4>
                <table class="table ">
                    <thead>
                       
                        <tr>
                            <th scope="col"><a href="" class="text-black" >Mã đơn hàng</a></th>
                            <th scope="col"><a href="" class="text-black" >Khách hàng</a></th>
                            <th scope="col"><a href="" class="text-black" >Giá</a></th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach($orders as $or)
                        <tr>
                            <td class="small">{{$or->order_code}}</td>
                            <td class="small">{{$or->name}}</td>
                            <td class="small">{{number_format($or->total_price,0,',','.')}}đ</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col ">
                <h4 class="text-center">Bình luận</h4>
                <table class="table ">
                    <thead>
                       
                        <tr>
                            <th scope="col"><a href="" class="text-black" >STT</a></th>
                            <th scope="col"><a href="" class="text-black" >Khách hàng</a></th>
                            <th scope="col"><a href="" class="text-black" >Bình luận</a></th>
                        </tr>
                    </thead>
                    <tbody >
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col boder">
                <h4 class="text-center">Khách hàng mới nhất</h4>
                <table class="table ">
                    <thead>
                       
                        <tr>
                            <th scope="col"><a href="" class="text-black text-decoration-none" >STT</a></th>
                            <th scope="col"><a href="" class="text-black text-decoration-none"  >Email</a></th>
                        </tr>
                    </thead>
                    <tbody >
                        @php
                        $i=1
                        @endphp
                        @foreach($Users as $us)
                        <tr>
                            <td class="small">{{$i++}}</td>
                            <td class="small">{{$us->email}}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col ">
                <h4 class="text-center">Sản phẩm bán chạy</h4>
                <table class="table ">
                    <thead>
                       
                        <tr>
                            <th scope="col"><a href="" class="text-black text-decoration-none" >Tên sản phẩm</a></th>
                            <th scope="col"><a href="" class="text-black text-decoration-none" > Bán</a></th>
                        </tr>
                    </thead>
                    <tbody >
                     
                        @foreach($Products as $pr)
                        <tr>
                            <td class="small">{{$pr->name}}</td>
                            <td class="small">{{$pr->sold}}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
   
</div>

@endsection('content')