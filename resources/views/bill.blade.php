@extends('layout')
@section('title','Pet Shop - Siêu thị thú cưng TPHCM')
@section('title2','Welcome to tnshop')
@section('content')
<div class="container-full mt-5" style="height: 200px;">
    <div class="container">
    @if (Auth::check())
        <h4>Cảm ơn quý khách đã đặt hàng tại website của chúng tôi</h4>
        <p>Mã đơn hàng là: <span class="text-danger">{{$orderCode }}</span> </p>
        <p>Vui lòng xem đơn hàng tại <a href="/lichsudonhang">đây</a></p>
        @else
        <h4>Cảm ơn quý khách đã đặt hàng tại website của chúng tôi</h4>
        <p>Mã đơn hàng là: <span class="text-danger">{{$orderCode }}</span> </p>
    @endif
    </div>
</div>


@endsection('content')