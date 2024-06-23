

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
                        <th colspan="3"><h5>Danh Sách Tài Khoản</h5></th>
                    </tr>
                </thead>
                <tr>
                    <th scope="col"><a href="" class="text-black" >STT</a></th>
                    <th scope="col"><a href="" class="text-black" >Tên tài khoản</a></th>
                    <th scope="col"><a href="" class="text-black" >Gmail</a></th>
                    <th scope="col"><a href="" class="text-black" >Ngày tạo</a></th>
                    <th scope="col"><a href="" class="text-black" >Hành động</a></th>
                </tr>
            </thead>
            <tbody ng-repeat="sp in dssp|orderBy:prop|limitTo:limit : begin">
            @foreach($User as $us)
                <tr>
                   <td>{{$us->id}}</td>
                   <td>{{$us->name}}</td>
                   <td>{{$us->email}}</td>
                   <td>{{$us->created_at}}</td>
                    <td>
                   
                        <a href="{{route('tkdelete',$us->id)}}" class="float-start text-decoration-none "><button class="  btn btn-outline-danger ">Xoá</button></a>
                      
                </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                {{$User->links('pagination::default') }} 

            </ul>
        </nav>

    </div>
</div>

@endsection('content')