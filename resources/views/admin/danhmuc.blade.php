

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
                        <th colspan="3"><h5>Danh Sách Danh Mục</h5></th>
                        <th >
                        <div class="w-100 mt-3 ms-5">
                                <a class="text-black" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <button class="btn btn-outline-success">Thêm danh mục</button>

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
                                                        DANH MỤC</button>


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

                                                        <form class=" g-3 " action="{{route('dmadminadd')}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="">
                                                                <label for="tk" class="form-label">Tên danh mục <span
                                                                        class="text-danger">*</span></label>
                                                                <div class=" mb-3">

                                                                    <input type="text" name="name" class="form-control rounded-0 "
                                                                        id="tk" required>
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
                    <th class="col"><a href="" class="text-black" >ID</a></th>
                    <th class="col"><a href="" class="text-black">Tên danh mục</a></th>
                    <th class="col"><a href="" class="text-black" >Hành động</a></th>
                </tr>
            </thead>
            <tbody >
               
                @foreach($Categories as $ca)
                <tr>
                   <td>{{$ca->id}}</td>
                   <td>{{$ca->name}}</td>
                    <td>
                        <div class=" float-start ">
                        <a class="text-black" href="" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2" data-product-id="{{ $ca->id }}">
                            <button class="btn btn-outline-success" >Sửa</button>
                        </a>
                        </div>
                        <a href="{{route('dmdelete',$ca->id)}}" class="float-start text-decoration-none "><button class="  btn btn-outline-danger ">Xoá</button></a>
                        <div class="modal fade w-100" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-home" type="button" role="tab"
                                                aria-controls="nav-home" aria-selected="true">SỬA DANH MỤC</button>
                                           

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
                                    <form class=" g-3 "id="update-Category-form" action="{{ route('dmupdate',$ca->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" id="Category-id" name="id" value="">
                                        <div class="">
                                            <label for="tk" class="form-label">Tên danh mục <span class="text-danger">*</span></label>
                                            <div class=" mb-3">
                                                <input type="text" name="name" value="" class="form-control rounded-0 " id="Category-name" required>
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
            <ul class="pagination">
                {{$Categories->links('pagination::default') }} 
            </ul>
        </nav>

    </div>
</div>

@endsection('content')