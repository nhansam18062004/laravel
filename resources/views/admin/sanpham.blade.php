@extends('layout_admin')
@section('title','Sản phẩm chi tiết | tnshop')
@section('title2','Danh sách sản phẩm')
@section('content')
<div class="container-full">
    <div class="container">
        <table class="table ">
            <thead>
                <thead class=" align-middle  ">
                    <tr>
                        <th colspan="3">
                            <h5>Danh Sách Sản Phẩm</h5>
                        </th>
                        <th colspan="3">
                            <div class="w-100 mt-3 ms-5">
                                <a class="text-black" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <button class="btn btn-outline-success">Thêm sản phẩm</button>

                                </a>
                            </div>
                            <div class="modal fade w-100" id="exampleModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <button class="nav-link active" id="nav-home-tab"
                                                        data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
                                                        role="tab" aria-controls="nav-home" aria-selected="true">THÊM
                                                        SẢN PHẨM</button>


                                                </div>
                                            </nav>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="tab-content " id="nav-tabContent">
                                                <div class="tab-pane fade show active " id="nav-home" role="tabpanel"
                                                    aria-labelledby="nav-home-tab" tabindex="0">
                                                    <div class="container ">

                                                        <form class=" g-3 " action="{{route('spadminadd')}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="">
                                                                <label for="tk" class="form-label">Tên sản phẩm <span
                                                                        class="text-danger">*</span></label>
                                                                <div class=" mb-3">

                                                                    <input type="text" name="name" class="form-control rounded-0 "
                                                                        id="tk" required>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <label for="img" class="form-label">Hình ảnh <span
                                                                        class="text-danger">*</span></label>
                                                                <div class=" mb-3">

                                                                    <input type="file" name="image" class="form-control rounded-0 "
                                                                        id="img" required>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <label for="mk" class="form-label">Giá <span
                                                                        class="text-danger">*</span></label>
                                                                <div class="input-group mb-3">

                                                                    <input type="text" name="price" class="form-control" id="mk"
                                                                        required>

                                                                </div>

                                                            </div>
                                                            <div class="">
                                                                <label for="mk" class="form-label">Danh mục <span
                                                                        class="text-danger">*</span></label>
                                                                <div class="input-group mb-3">
                                                                    <select name="category_id" id="" class="form-control" required>
                                                                        <option value="0" selected>Chọn danh mục</option>
                                                                        @foreach($Categories as $ca)
                                                                        <option value="{{$ca->id}}" >{{$ca->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="row mt-4">

                                                                <div class="col-5">
                                                                    <button
                                                                        class="text-white border-0 pt-2 w-75 m-auto rounded-1 bg-success">
                                                                        <h6>Thêm</h6>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </form>


                                                    </div>
                                                </div>


                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </th>
                    </tr>
                </thead>
                <tr>
                    <th class="col-1"><a href="" class="text-black">ID</a></th>
                    <th class="col-4"><a href="" class="text-black">Tên sản phẩm</a></th>
                    <th class="col-1"><a href="" class="text-black">Hình</a></th>
                    <th class="col-1"><a href="" class="text-black">Lượt bán</a></th>
                    <th class="col-1"><a href="" class="text-black">Số lượng</a></th>
                    <th class="col-1"><a href="" class="text-black">Đơn giá</a></th>
                    <th class="col-2"><a href="" class="text-black">Hành động</a></th>
                </tr>
            </thead>
            <tbody>
               
                @foreach ($Products as $pr)
                <tr>
                    <td>{{$pr->id}}</td>
                    <td >{{$pr->name}}</td>
                    <td><img src="{{asset('hinh/' . $pr->image)}}" width="50px" alt=""></td>
                    <td >{{$pr->sold}}<input type="hidden" value="{{$pr->quantity}}"></td>
                    <td>{{$pr->quantity}}</td>
                    <td>{{number_format($pr->price,0,',','.') }}đ<input type="hidden" value="{{$pr->category_id}}">
                    </td>
                    <td>
                        <div class=" float-start ">
                        <a class="text-black" href="" data-bs-toggle="modal"
                            data-bs-target="#exampleModal1" data-product-id="{{ $pr->id }}">
                            <button class="btn btn-outline-success" >Sửa</button>
                        </a>
                        </div>
                        <a href="{{route('spdelete',$pr->id)}}" class="text-decoration-none float-start"><button class="  btn btn-outline-danger ">Xoá</button></a>

                        <div class="modal fade w-100" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-home" type="button" role="tab"
                                                aria-controls="nav-home" aria-selected="true">SỬA SẢN PHẨM</button>
                                           

                                        </div>
                                    </nav>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="tab-content " id="nav-tabContent">
                                        <div class="tab-pane fade show active " id="nav-home" role="tabpanel"
                                            aria-labelledby="nav-home-tab" tabindex="0">
                                            <div class="container ">
                                    <form class=" g-3 "id="update-product-form" action="{{ route('spupdate',$pr->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" id="product-id" name="id" value="">
                                        <div class="">
                                            <label for="tk" class="form-label">Tên sản phẩm <span class="text-danger">*</span></label>
                                            <div class=" mb-3">
                                                <input type="text" name="name" value="" class="form-control rounded-0 " id="product-name" required>
                                            </div>
                                        </div>
                                        <div class="">
                                            <label for="img" class="form-label">Hình ảnh <span class="text-danger">*</span></label>
                                            <div class=" mb-3">
                                                <input type="file" name="image" class="form-control rounded-0 " id="img">
                                                <img src="" id="product-img" width='50px' alt="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                            <label for="gia" class="form-label">Giá <span class="text-danger">*</span></label>
                                            
                                                <input type="text"  name="price" class="form-control" id="product-price" required>
                                                </div>
                                            <div class="col">
                                            <label for="quantity" class="form-label">Số lượng  <span class="text-danger">*</span></label>
                                            
                                                <input type="text"  name="quantity" class="form-control" id="product-quantity" required>
                                            </div>
                                        </div>
                                        <div class="">
                                            <label for="mk" class="form-label">Danh mục <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <select name="category_id" class="form-control">
                                                    @foreach($Categories as $ca)
                                                        @if ($ca->id== $pr->category_id)
                                                        <option value="{{$ca->id}}" id="product-category"  selected>{{$ca->name}} </option>
                                                        @else
                                                        <option value="{{$ca->id}}">{{$ca->name}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-5">
                                                <button class="text-white border-0 pt-2 w-75 m-auto rounded-1 bg-success">
                                                    <h6>Sửa</h6>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>




                </td>
                </tr>
                @endforeach
             
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
        <ul class="pagination ">
                {{$Products->links('pagination::default') }} 
                </ul>
        </nav>

    </div>
</div>

@endsection('content')