

@extends('layout')
@section('title','Sản phẩm chi tiết | tnshop')
@section('title2','Danh sách sản phẩm')
@section('content')
<div class="container-full">
        <div class="container">
            <div class="row mt-5">
                <div class="col-5  ">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('hinh/' . $Product->image) }}" width="500px" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('hinh/' . $Product->img1) }}" width="500px" class="d-block" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('hinh/' . $Product->img2) }}" width="530px" class="d-block" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-black rounded-pill" aria-hidden="true"></span>
                            <span class="visually-hidden ">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon  bg-black rounded-pill" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-7 mt-3">
            
                    <h3>{{$Product->name }}</h3>
                    <p>Tình trạng: <strong>Còn hàng</strong></p>
                    <div class="row">
                        <div class="col-2 mt-1">
                            <h5>Giá:</h5>
                        </div>
                        <div class="col text-danger">
                            <h3>{{ number_format($Product->price, 0, ',', '.') }} đ</h3>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2 mt-1">
                            <h5>Loại:</h5>
                        </div>
                        <div class="col-1 mr-4">
                            <input type="checkbox" class="btn-check" id="btn-check-1" checked autocomplete="off">
                            <label class="btn" for="btn-check-1">400g</label>
                        </div>
                        <div class="col-2 ">
                            <input type="checkbox" class="btn-check" id="btn-check-2"  autocomplete="off">
                            <label class="btn" for="btn-check-2">1kg</label>
                        </div>
                    </div>
                   
                    <div class="row mt-4">
                        <div class="col-2 mt-1">
                            <h5>Số lượng:</h5>
                        </div>
                        <div class="col-2 ">
                            <div class="input-group ">
                                <button class="input-group-text bg-white">-</button>
                                <input type="text" value="1" class="form-control"
                                    aria-label="Amount (to the nearest dollar)">
                                <button class="input-group-text bg-white">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4  ">
                            <button class="bg-white w-75 p-2 ms-4">Thêm vào giỏ</button>
                        </div>
                        <div class="col-4 ">
                            <button class="bg-success border-0 text-white w-75 p-2 ">Mua ngay</button>

                        </div>
                    </div>
              
                </div>
            </div>
            <div class="row m-2">
                <img src="{{asset('hinh/' . $Product->image) }}" class="img-thumbnail m-1 " style="width:100px;" alt="">
                <img src="{{asset('hinh/' . $Product->img1) }}" class="img-thumbnail m-1 " style="width:100px;" alt="">
                <img src="{{asset('hinh/' . $Product->img2) }}" class="img-thumbnail m-1 " style="width:100px;" alt="">
            </div>
            <div class=" mt-5 ">
                <h4>MÔ TẢ SẢN PHẨM</h4>
            </div>
            <hr>
            <p class=" pb-5">Chưa có mô tả sản phẩm này </p>
            <div class=" mt-5">
                <h4>ĐÁNH GIÁ</h4>
            </div>            
                        <div class="float-start mr-2 ">
                            <input type="checkbox" class="btn-check" id="btn-check-1" checked autocomplete="off">
                            <label class="btn p-1 text-capitalize" for="btn-check-1" >Tất cả</label>
                        </div>
                        <div class="float-start mr-2">
                            <input type="checkbox" class="btn-check" id="btn-check-2" checked autocomplete="off">
                            <label class="btn p-1" for="btn-check-2">5 <i class="fa-regular fa-star"></i></label>
                        </div>
                        <div class="float-start mr-2">
                            <input type="checkbox" class="btn-check" id="btn-check-2" checked autocomplete="off">
                            <label class="btn p-1" for="btn-check-2">4 <i class="fa-regular fa-star"></i></label>
                        </div>
                        <div class="float-start mr-2">
                            <input type="checkbox" class="btn-check" id="btn-check-2" checked autocomplete="off">
                            <label class="btn p-1" for="btn-check-2">3 <i class="fa-regular fa-star"></i></label>
                        </div>
                        <div class="float-start mr-2">
                            <input type="checkbox" class="btn-check" id="btn-check-2" checked autocomplete="off">
                            <label class="btn p-1" for="btn-check-2">2 <i class="fa-regular fa-star"></i></label>
                        </div>
                        <div class="float ">
                            <input type="checkbox" class="btn-check" id="btn-check-2" checked autocomplete="off">
                            <label class="btn p-1" for="btn-check-2">1 <i class="fa-regular fa-star"></i></label>
                        </div>
            <div class="">
                <h6>admin <i class="fa-solid fa-star" style="color: #00bd55;"></i> <i class="fa-solid fa-star" style="color: #00bd55;"></i><i class="fa-solid fa-star" style="color: #00bd55;"></i> <i class="fa-regular fa-star" style="color: #00bd55;"></i><i class="fa-regular fa-star" style="color: #00bd55;"></i></h6>
               <p>Sản phẩm quá chất lượng</p>
               <hr>
                <h6>admin <i class="fa-solid fa-star" style="color: #00bd55;"></i> <i class="fa-solid fa-star" style="color: #00bd55;"></i><i class="fa-solid fa-star" style="color: #00bd55;"></i> <i class="fa-solid fa-star" style="color: #00bd55;"></i><i class="fa-regular fa-star" style="color: #00bd55;"></i></h6>
               <p>Sản phẩm tốt</p>
                            <button class="bg-success border-0 text-white w-25 p-2 ">Viết đánh giá</button>
  
            </div>
            <div class=" text-center mt-5">
                <h3>Sản phẩm liên quan</h3>
            </div>
            <div class="p-3  row text-center">
            @foreach ($Products as $pr)
                <div class="col-sm-3 mb-4 ">
                    <div class="card ">
                        <div class="card-title  m-0 text-center">
                            <a href="{{route('sanphamchitiet', $pr->id)}}">
                            <img src="{{asset('hinh/' . $pr->image) }}" alt="" width="80%">
                            </a>
                        </div>
                        <div class="card-body border-top" style="height: 90px">
                            <p>{{ $pr->name }} </p>
                        </div>
                        <div class="card-footer bg-body border-top-0">
                            <div class="row">
                                <h5 class="col-9 text-danger">{{ number_format($pr->price, 0, ',', '.') }} đ</h5>
                                <a href="" class="col-2 text-black-50">
                                    <span data-bs-toggle="tooltip" data-bs-title="Thêm vào giỏ"><i
                                            class="fa-solid fa-bag-shopping fa-lg"></i></span>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                 
                @endforeach


            </div>

        </div>
</div>
@endsection('content')