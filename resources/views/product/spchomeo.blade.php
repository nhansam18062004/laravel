@extends('layout')
@section('title','Đồ Cho Mèo | Pet Shop')
@section('title2','Danh sách sản phẩm')
@section('content')

    <div class="container-full mt-3">     
        <div class="container">
            <img src="{{asset('hinh/bannermeo.webp')}}"  width="100%"  alt="" >
            <div class="row mt-3">
                <h1 class=" col-9  ">Đồ Cho Mèo</h1>
                <!-- <div class="col-3 text-center mt-1">Hiển thị 1-12 trên 14 kết quả</div> -->
                <div class="col-2 ">
                    <select class="form-select" id="validationCustom04" required>
                        <option selected  value="">Thứ tự mặt định</option>
                        <option>Mới nhất</option>
                        <option>Thứ tự theo giá: thấp đến cao</option>
                        <option>Thứ tự theo giá: cao xuống thấp</option>
                    </select>    
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-2 mt-3">
                    <div class="mb-4">
                        <h5>Mức giá:</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Dưới  50.000₫
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                            <label class="form-check-label" for="flexCheckDefault">
                                    50.000₫ - 100.000₫
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                            <label class="form-check-label" for="flexCheckDefault">
                                    100.000₫ - 200.000₫
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                            <label class="form-check-label" for="flexCheckDefault">
                                    Trên 200.000₫
                          </div>
                    </div>
               
                    <div class="mb-4">
                        <h5>Thương hiệu:</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            Royal Canin
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                            <label class="form-check-label" for="flexCheckDefault">
                            Natural Core
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                            <label class="form-check-label" for="flexCheckDefault">
                            SmartHeart
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                            <label class="form-check-label" for="flexCheckDefault">
                            Tropiclean
                          </div>
                    </div>
            
               
                </div>
                <div class="container  col-10">
                <div class="p-3  row ">
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
                                <a href="{{route('themgiohang', $pr->id)}}" class="col-2 text-black-50">
                                    <span data-bs-toggle="tooltip" data-bs-title="Thêm vào giỏ"><i
                                            class="fa-solid fa-bag-shopping fa-lg"></i></span>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                 
                @endforeach
       
       

        </div>

             
     
            <nav aria-label="Page navigation example " class="mt-4 mb-4 d-flex justify-content-center" >
                        <ul class="pagination ">
                        {{$Products->appends(['keywork' => $query])->links('pagination::default') }} 

                        </ul>
                    </nav>
           

                </div>
             
            </div>
           
        </div>
    </div>
@endsection('content')