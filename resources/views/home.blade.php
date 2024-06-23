@extends('layout')
@section('title','Pet Shop - Siêu thị thú cưng TPHCM')
@section('title2','Welcome to tnshop')
@section('content')
<div class="container-full ">
    <img src="hinh/banner1.webp" width="100%" alt="">
</div>

<section class="ftco-section bg-light ftco-no-pt ftco-intro ">
    <div class="container">
        <div class="row ">
            <div class="col-md-3 d-flex  ftco-animate">
                <div class="d-block services text-center border border-success rounded-3 ">
                  
                    <div class="media-body mt-2 ">
                        <h3 class="heading">SHIP COD TOÀN QUỐC</h3>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch  ftco-animate">
                <div class="d-block services  text-center border border-success rounded-4">
                  
                    <div class="media-body mt-2">
                        <h3 class="heading">MIỄN PHÍ ĐỔI HÀNG</h3>
                      
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch  ftco-animate">
                <div class="d-block services text-center border border-success rounded-4">
                 
                    <div class="media-body mt-2">
                        <h3 class="heading text-uppercase">Giá Cả Hợp Lý</h3>

                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch  ftco-animate ">
                <div class="d-block services text-center border border-success rounded-4">
                   
                    <div class="media-body mt-2">
                        <h3 class="heading text-uppercase">Ưu đãi Hấp Dẫn</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-full bg-white ">
    <div class="bg-success rounded-5 w-50 p-1 m-auto">
        <h3 class="text-center text-white text-uppercase mt-1">Sản Phẩm Bán Chạy</h3>
    </div>
    <div class="container  mb-4 mt-4">
        <div class="  row ">
       
        @foreach ($Sold as $sd)
                <div class="col-sm-3 mb-4 ">
                    <div class="card ">
                    <div class="card-title  m-0 text-center">
                            <a href="{{route('sanphamchitiet', $sd->id)}}">
                            <img src="{{asset('hinh/' . $sd->image) }}" alt="" width="80%">
                            </a>
                        </div>
                        <div class="card-body border-top" style="height: 90px">
                            <p>{{ $sd->name }} </p>
                        </div>
                        <div class="card-footer bg-body border-top-0">
                            <div class="row">
                                <h5 class="col-9 text-danger">{{ number_format($sd->price, 0, ',', '.') }} đ</h5>
                                <a href="{{route('themgiohang', $sd->id)}}" class="col-2 text-black-50">
                                    <span data-bs-toggle="tooltip" data-bs-title="Thêm vào giỏ"><i
                                            class="fa-solid fa-bag-shopping fa-lg"></i></span>

                                </a>
                            </div>
                        </div>
                        <p class="text-left ms-3 text-sm"><span class="fw-bold">{{ $sd->sold }}</span> sản phẩm đã bán</p>

                    </div>
                    
                </div>
                 
                @endforeach

        </div>
        <div class="text-center">
        <a href="/san-pham" class="xt mb-4 text-black text-decoration-none text-center">Xem thêm sản phẩm</a>

        </div>

    </div>
    <div class="bg-success rounded-5 w-50 p-1 m-auto">
        <h3 class="text-center text-white text-uppercase">Đồ cho Chó </h3>
    </div>
    <div class="container  mb-4 mt-4">
        <div class="  row ">
        @foreach ($Dog as $dg)
                <div class="col-sm-3 mb-4 ">
                    <div class="card ">
                    <div class="card-title  m-0 text-center">
                            <a href="{{route('sanphamchitiet', $dg->id)}}">
                            <img src="{{asset('hinh/' . $dg->image) }}" alt="" width="80%">
                            </a>
                        </div>
                        <div class="card-body border-top" style="height: 90px">
                            <p>{{ $dg->name }} </p>
                        </div>
                        <div class="card-footer bg-body border-top-0">
                            <div class="row">
                                <h5 class="col-9 text-danger">{{ number_format($dg->price, 0, ',', '.') }} đ</h5>
                                <a href="{{route('themgiohang', $dg->id)}}" class="col-2 text-black-50">
                                    <span data-bs-toggle="tooltip" data-bs-title="Thêm vào giỏ"><i
                                            class="fa-solid fa-bag-shopping fa-lg"></i></span>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                 
                @endforeach
      

        </div>
        <div class="text-center mb-4">
       <a href="/Đồ-cho-chó" class="xt text-black text-decoration-none">Xem
                thêm sản phẩm đồ cho Chó</a></div>
        <img src="images/banner-dog.webp" width="100%" alt="">

    </div>
    <div class="bg-success rounded-5 w-50 p-1 m-auto mt-4">
        <h3 class="text-center  text-white text-uppercase">Đồ cho Mèo</h3>
    </div>
    <div class="container  mt-4">

        <div class="  row ">
        @foreach ($Cat as $ct)
                <div class="col-sm-3 mb-4 ">
                    <div class="card ">
                    <div class="card-title  m-0 text-center">
                            <a href="{{route('sanphamchitiet', $ct->id)}}">
                            <img src="{{asset('hinh/' . $ct->image) }}" alt="" width="80%">
                            </a>
                        </div>
                        <div class="card-body border-top" style="height: 90px">
                            <p>{{ $ct->name }} </p>
                        </div>
                        <div class="card-footer bg-body border-top-0">
                            <div class="row">
                                <h5 class="col-9 text-danger">{{ number_format($ct->price, 0, ',', '.') }} đ</h5>
                                <a href="{{route('themgiohang', $ct->id)}}" class="col-2 text-black-50">
                                    <span data-bs-toggle="tooltip" data-bs-title="Thêm vào giỏ"><i
                                            class="fa-solid fa-bag-shopping fa-lg"></i></span>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                 
                @endforeach
      
        </div>
        <div class="text-center mb-4 ">
        <a href="Đồ-cho-mèo" class="xt text-black text-decoration-none ">Xem
                thêm sản phẩm đồ cho Mèo</a></div>
        <img src="images/banner-3.webp" width="100%" alt="">

    </div>
    <div class="container mb-5 ">
        <h3 class=" ms-4 mt-3">Có thể bạn muốn biết</h3>

        <div class="  row ">
            <div class="col-sm-4 mt-3 mb-3">
                <a href="" class="text-decoration-none text-black">
                    <div class="row">
                        <div class="col-3">
                    <img src="hinh/tin1.webp" alt="" width="100%" >

                        </div>

                    <div class="col-9 ">
                        <div>Hướng dẫn cách chăm sóc chó con mới đẻ chuẩn nhất</div>
                        <div class="text-secondary "style='font-size:12px'> 14/05/2024</div>

                    </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mt-3 mb-3">
                <a href="" class="text-decoration-none text-black">
                    <div class="row">
                        <div class="col-3">
                    <img src="hinh/tin2.webp" alt="" width="100%" >

                        </div>

                    <div class="col-9 ">
                        <div>Cách chăm sóc mèo con cho người chưa có kinh nghiệm</div>
                        <div class="text-secondary " style='font-size:12px'> 05/05/2024</div>

                    </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mt-3 mb-3">
                <a href="" class="text-decoration-none text-black">
                    <div class="row">
                        <div class="col-3">
                    <img src="hinh/tin3.webp" alt="" width="100%" >

                        </div>

                    <div class="col-9 ">
                        <div>Làm thế nào để chó hết hôi? Gợi ý 4 cách hiệu quả nhất</div>
                        <div class="text-secondary "style='font-size:12px'> 10/05/2024</div>

                    </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mt-3 mb-3">
                <a href="" class="text-decoration-none text-black">
                    <div class="row">
                        <div class="col-3">
                    <img src="hinh/tin4.webp" alt="" width="100%" >

                        </div>

                    <div class="col-9 ">
                        <div>Làm thế nào để chó ăn nhiều hơn - Giải pháp cho chó biếng ăn</div>
                        <div class="text-secondary "style='font-size:12px'> 12/05/2024</div>

                    </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mt-3 mb-3">
                <a href="" class="text-decoration-none text-black">
                    <div class="row">
                        <div class="col-3">
                    <img src="hinh/tin5.webp" alt="" width="100%" >

                        </div>

                    <div class="col-9 ">
                        <div >Làm thế nào để hết bọ chét trong nhà tận gốc</div>
                        <div class="text-secondary "style='font-size:12px'> 04/05/2024</div>

                    </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 mt-3 mb-3">
                <a href="" class="text-decoration-none text-black">
                    <div class="row">
                        <div class="col-3">
                    <img src="hinh/tin6.webp" alt="" width="100%" >

                        </div>

                    <div class="col-9 ">
                        <div>Địa chỉ cung cấp dịch vụ cắt tỉa lông chó mèo tại TPHCM</div>
                        <div class="text-secondary "style='font-size:12px'> 14/05/2024</div>

                    </div>
                    </div>
                </a>
            </div>
           

        </div>
        <a href="/tintuc" class="text-black text-decoration-none ">Xem
            các bài tin khác >></a>
    </div>
</div>

@endsection('content')