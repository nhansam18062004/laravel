<div class="container-full bg-black text-center">
    <a href="/lienhe" class="text-white   text-decoration-none">Hỗ Trợ Nhanh Chóng <span class="text-danger">24/24</span></a>
</div>
<nav class="navbar navbar-expand-lg  ftco_navbar  ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/"><span class="flaticon-pawprint-1 "></span>Pet Shop</a>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <div class=" h-100  w-100 ">
                <div class="mt-3  input-group ">
                    <form action="{{route('search')}}" class="input-group" method="GET">
                        <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control " name="keywork" placeholder="Tìm kiếm sản phẩm..." value="">
                    </form>
                </div>

            </div>
            

        </div>
        <div class="row ">      
                 @if (Auth::check() && Auth::user()->role === 'User')
                 <div class="col-10 mt-3 ">
                     <div class="float-left ms-1 mt-1">
                     <a href="/capnhat" class="text-capitalize text-black text-decoration-none">  <i class="fa-regular fa-user fa-xl"></i> {{ Auth::user()->name }}</a>
                     </div>
                     <div class="float-left ms-1">
                     <form action="{{ route('logout') }}" method="POST">
                         @csrf
                         <button type="submit" class="btn btn-outline-dark  btn-sm p-1 text-capitalize" >Thoát</button>
                     </form>
                     </div>
                </div>
                <div class="col-2  mt-3 ">
                 <a class="text-black" href="/giohang">
                     <div class=" position-relative">
                         <i class="fa-solid fa-cart-shopping fa-xl"></i>
                         <span
                             class="position-absolute top-0 start-100 translate-middle-y badge rounded-pill bg-danger">
                             {{ $cartTotalQuantity }}
                             <span class="visually-hidden">unread messages</span>
                         </span>
                     </div>
            
                 </a>
             </div>
                 @else
                 <div class="col-2 mt-3 ms-3 mr-2">
                 <a  class="text-black" href="/user">
                     <i class="fa-regular fa-user fa-xl"></i>
                 </a>
                 </div>
                 <div class="col-4  mt-3 ">
                 <a class="text-black" href="/giohang">
                     <div class=" position-relative">
                         <i class="fa-solid fa-cart-shopping fa-xl"></i>
                         <span
                             class="position-absolute top-0 start-100 translate-middle-y badge rounded-pill bg-danger">
                             {{ $cartTotalQuantity }}
                             <span class="visually-hidden">unread messages</span>
                         </span>
                     </div>
            
                 </a>
             </div>
                 @endif
                
            
            
            
         </div>
    </div>

</nav>
<nav class="navbar navbar-expand-lg  ftco_navbar  ftco-navbar-light " id="ftco-navbar" style="height:40px">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">  
	        <span class="fa fa-bars"></span> Menu
	    </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            
            <nav class="m-auto">
                <ul class="nav-menu font-weight-bold text-uppercase ">
                    <li>
                    <a href="/Đồ-cho-chó">ĐỒ CHO CHÓ <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="dropdown-menu ">
                    @foreach ($Categories as $ca)
                    <li class='mt-3 font-weight-normal text-capitalize'><a href="{{route('categories', $ca->id)}}"> {{ $ca->name }}</a></li>
                            
                        @endforeach
                   
                            
                    </ul>
                    </li>
                    <li>
                    <a href="/Đồ-cho-mèo">ĐỒ CHO Mèo <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="dropdown-menu  ">
                
                    @foreach ($Categories as $ca)
                    <li class='mt-3 font-weight-normal text-capitalize '><a href="{{route('categories2', $ca->id)}}"> {{ $ca->name }}</a></li>
                            
                        @endforeach
                            
                      
                    </ul>
                    </li>
                    <li><a href="gallery.html">Dịch vụ</a></li>
                    <li><a href="/tintuc">Tin tức</a></li>
                    <li><a href="/lienhe">Liên hệ</a></li>
                </ul>
            </nav>
        </div>
    </div>

</nav>
