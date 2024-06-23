<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">

  
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">

  </head>
  <style>
        .vertical-line {
            position: relative;
            text-align: center;
            height: 100%;
        }
        .vertical-line::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            border-left: 1px solid black;
            transform: translateX(-50%);
        }
        .vertical-line .or {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 0 10px;
            z-index: 1;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
  <body>

   
    @include('header')
    @if(session('success'))
            <div class="alert alert-success   text-center rounded-0">
              {{ session('success') }}
            </div>
          @endif
    <main>
      

    @yield('content')    
    </main>
    @include('footer')
    </div>

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  <script src="{{asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://kit.fontawesome.com/99445db236.js" crossorigin="anonymous"></script>
  <script>const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))</script>
  </body>
</html>