<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán | Pet Shop</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container-full">
        <div class="container">
        <form action="{{ route('shopping') }}" id="myForm" class="card-body" method="POST">
                    @csrf
            <div class="row">
                <div class="col-7 p-5 mt-4">
                    <h4>Thông Tin Giao Hàng</h4>
                    <hr>
                    
                    <div class="form-group">
                        <label for="name">Họ và tên</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('hovaten', optional(Auth::user())->hovaten) }}" require>
                    </div>
                        <br>
                        <div class="row">
                            <div class="form-group col">
                                <label for="phone" class="form-label">
                                    <h6>Số điện thoại:</h6>
                                </label>
                                <input type="text" maxlength="11" class="form-control" name="phone" id="phone"
                                    placeholder="Số điện thoại" require>
                            </div>

                            <div class="form-group col">
                                <label for="email" class="form-label">
                                    <h6>Email:</h6>
                                </label>
                                <input type="email" class="form-control" value="{{ old('email', optional(Auth::user())->email) }}" name="email" id="email" placeholder="Email" require >
                            </div>
                        </div>
                        <br>
                        <label for="address" class="form-label">
                            <h6> Địa chỉ:</h6>
                        </label>
                        <input type="text" class="form-control" name="address" value="{{ old('diachi', optional(Auth::user())->diachi) }}"  placeholder="Địa chỉ" require>
                        <br>
                        <div class="row">
                            <div class="form-group col">
                                <label for="" class="form-label">
                                    <h6>Tỉnh/Thành phố:</h6>
                                </label>
                                <select name="" class="form-control">

                                    <option>Tỉnh/Thành phố</option>

                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="" class="form-label">
                                    <h6>Quận/Huyện:</h6>
                                </label>
                                <select name="" class="form-control">
                                    <option>Quận/Huyện</option>

                                </select>
                            </div>

                            <div class="form-group col">
                                <label for="" class="form-label">
                                    <h6>Phường/Xã:</h6>
                                </label>
                                <select name="" class="form-control">
                                    <option value="" disabled selected hidden>Phường/Xã</option>

                                </select>
                            </div>

                        </div>

                   
                    <button class="bg-white  border-1 rounded-1 mt-3"><a href="/giohang" class="text-black text-decoration-none p1 float-start "><i class="fa-solid fa-arrow-left me-2"></i>Giỏ
                            hàng</a></button>
                            <button type="submid" class="bg-success border-0 bg-opacity-75 text-white rounded-1   p-1 col float-end mt-3 w-50" form="myForm"><strong>Thanh
                                Toán</strong></button>
                </div>
             
                <div class="col-5 border-start border-1 p-5 mt-4">
                    <h4>Thông Tin Đơn Hàng</h4>
                    <hr>
                    @foreach($cart as $ca)
                    <div class="row p-2">
                        <div class="col-2 ">
                            <a href="">
                                <img src="{{asset('hinh/'.$ca['image'])}}" class="border" width="50px" alt="">
                            </a>
                        </div>
                        <div class="col-8">
                            <h6>{{$ca['name']}}</h6>
                            <p>400g</p>
                        </div>
                        <div class="col-1  ">
                            <strong>{{ number_format($ca['price']*$ca['quantity'],0,',','.') }}đ</strong>
                        </div>
                    </div>
                    @endforeach
                    <hr>
                    <li class="mt-3">Phí vận chuyển sẽ được miễn phí.</li>
                    <li class="mt-3">Khách hàng vui lòng điền <span class="text-danger">MÃ ĐƠN HÀNG</span> ở trang bên
                        vào phần bút ký trong giao diện chuyển tiền trước khi chuyển khoản.</li>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="payment_method_cod"
                                value="cod" checked>
                            <label class="form-check-label" for="payment_method_cod">
                                Thanh toán khi nhận hàng
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="payment_method_bank"
                                value="bank">
                            <label class="form-check-label" for="payment_method_bank">
                                Chuyển khoản ngân hàng <br>
                                MB Bank 0785628531 (SAM THANH NHAN)
                            </label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-8">Tạm tính</div>
                        <div class="col-4">{{number_format($tong,0,',','.')}}đ</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-8">Tổng</div>
                        <div class="col-4 text-danger"><strong>{{number_format($tong,0,',','.')}}đ</strong></div>
                    </div>

                </div>
            </div>
            </form>

        </div>
    </div>

    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/99445db236.js" crossorigin="anonymous"></script>



</body>

</html>