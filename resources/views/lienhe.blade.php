@extends('layout')
@section('title','Welcome to tnshop')
@section('title2','Welcome to tnshop')
@section('content')
<div class="container-full mb-5">
        <div class="container mt-5">
            <h3 class="text-center">LIÊN HỆ</h3>
            <div class="row mt-3">
                <div class="col-6 lh-lg">
                    <strong>Địa chỉ: </strong>444 Mã Lò, Phường Bình Hưng Hoà A, Quận Bình Tân <br>
                    <strong>Hotline: </strong>0785628531 <br>
                    <strong>Email: </strong>nhansam18062004@gmail.com <br>
                    <form class="row g-3 mt-2">
                        <div class="col-md-6">
                          <input type="text" placeholder="Họ và tên" class="form-control" id="hoten">
                        </div>
                        <div class="col-md-6">
                          <input type="email" placeholder="Email" class="form-control" id="email">
                        </div>
                       
                        <div class="col-md-6">
                          <input type="text" placeholder="Điện thoại" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Địa chỉ" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" placeholder="Nội dung" id="exampleFormControlTextarea1" rows="5"></textarea>
                          </div>
                        <button class="w-25 rounded-1 border-0 text-white bg-success ms-3" >Góp ý</button>
                      </form>
                </div>
                <div class="col-5 p-3">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d979.8472220630466!2d106.59898371248255!3d10.781497802199407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752c6e7812ba65%3A0xffd06525aba3f015!2zTcOjIEzDsiwgQsOsbmggSMawbmcgSG_DoCBBLCBCw6xuaCBUw6JuLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1710676160871!5m2!1svi!2s"
                    width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection('content')