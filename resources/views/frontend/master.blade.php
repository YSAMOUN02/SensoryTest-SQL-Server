<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <!-- Bootstrap CSS -->
  <link href="{{URL('assets/Css/bootstrap.min.css')}}" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="icon" href="{{URL('assets/image/photo_2024-01-03_10-04-12.jpg')}}" type="image/x-icon">

  <link rel="stylesheet" href="{{URL('assets/Css/fonts6/css/all.css')}}">


  <script src="{{URL('assets/JS/jquery.min.js')}}"></script>
  <title>Sensory Test</title>
   <!-- CSS -->
   <link rel="stylesheet" href="{{URL('assets/Css/frontend.css')}}">
  </head>
  <body>

    <div class="container-fluid">

      <div class="blur">
        <div class="mid">
          <div class="spinner-border text-secondary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <span>Loadding...</span>
        </div>

    </div>
        @if (Session::has("message-fail"))
        <div class="aler_login_fail" style="display: block;
        display: flex;
        align-items: center;
        justify-content: center;">
            <span>{{Session::get("message-fail")}}</span>
        </div>
        @endif

        @if (Session::has("message-success"))
        <div class="aler_login_fail bg-success" style="display: block;
        display: flex;
        align-items: center;
        justify-content: center;">
            <span>{{Session::get("message-success")}}</span>
        </div>
        @endif

        @if (Session::has("message-primary"))
        <div class="aler_login_fail bg-primary" style="display: block;
        display: flex;
        align-items: center;
        justify-content: center;">
            <span>{{Session::get("message-primary")}}</span>
        </div>
        @endif
        {{-- <div class="container-fluid"> --}}



            @yield('content')


        {{-- </div> --}}

        <script src="{{URL('assets/JS/bootstrap.bundle.min.js')}}"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


    <script src="{{URL('/assets/JS/front.js')}}"></script>

  </body>
</html>
