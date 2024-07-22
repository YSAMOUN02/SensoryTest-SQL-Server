<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS -->
  <link rel="stylesheet" href="{{URL('assets/Css/backend.css')}}">

  <!-- Bootstrap CSS -->
  <link href="{{URL('assets/Css/bootstrap.min.css')}}" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="icon" href="{{URL('assets/image/photo_2024-01-03_10-04-12.jpg')}}" type="image/x-icon">

  <link rel="stylesheet" href="{{URL('assets/Css/fonts6/css/all.css')}}">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <title>Sensory Test</title>
</head>

<body>




  <div class="container-fluid">
    <div class="expand-nav">
      <button onclick="expand_nav()" ><i class="fa-solid fa-arrows-left-right"></i></button>
    </div>
    
    <div class="blur">
        <div class="mid">
          <div class="spinner-border text-secondary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <span>Loadding...</span>
        </div>
      
    </div>
    @if (Session::has("no_test"))
          <div class="aler_fail" style="display: block;
          display: flex;
          align-items: center;
          justify-content: center;">
              <span>This test not tested yet.</span>
          </div>
      @endif
    <div class="nav-bar">
      <div class="title-system">
        <img src="{{URL('assets/image/photo_2024-01-03_10-04-12.jpg')}}" alt="">

      </div>
      <div class="body-box">
        <div class="box">
          <a href="/admin/add/product">
            <div class="sub-box">
              <div class="box-item">
                <i class="fa-solid fa-cubes"></i><span>Add Product</span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="body-box">
        <div class="box">
          <a href="/admin/view/product">
            <div class="sub-box">
              <div class="box-item">
                <i class="fa-solid fa-box-open"></i><span>View Product</span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="body-box">
        <div class="box">
          <a href="/admin/add/employee">
            <div class="sub-box">
              <div class="box-item">
                <i class="fa-solid fa-users-viewfinder"></i><span>Add Tester</span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="body-box">
        <div class="box">
          <a href="/admin/view/employee">
            <div class="sub-box">
              <div class="box-item">
                <i class="fa-regular fa-id-card"></i><span>View Tester</span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="body-box">
        <div class="box">
          <a href="/admin/add/test">
            <div class="sub-box">
              <div class="box-item">
                <i class="fa-solid fa-list"></i><span>Add Test</span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="body-box">
        <div class="box">
          <a href="/admin/view/test">
            <div class="sub-box">
              <div class="box-item">
                <i class="fa-solid fa-bars-staggered"></i><span>View Test</span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="body-box">
        <div class="box">
          <a href="/admin/view/admin">
            <div class="sub-box">
              <div class="box-item">
               
                <i class="fa fa-user-circle" aria-hidden="true"></i><span>View Admin</span>
              </div>
            </div>
          </a>
        </div>
      </div>
        <div class="body-box">
          <div class="box">
            <a href="/admin/logout">
              <div class="sub-box">
                <div class="box-item">
                  <i class="fa-solid fa-right-from-bracket"></i><span>Log Out</span>
                </div>
              </div>
            </a>
          </div>
        </div>

    </div>
    <div class="dashboard">


                    @yield('content')


    </div>
    <div class="alert-confirm">
        <div class="inner-alert">
            <span>Are you sure?</span>
            <div class="btn-confirm">
                <form action="/admin/delete/product">
                  <input type="text" data-id-2   id="id-delete-box" name="delete-id" class="d-none">
                  <button>Yes</button>
                </form>
                <button class="alert-no" onclick="alert_close()" >No</button>
            </div>
        </div>
    </div>
    @if(Session::has("message-success"))
      <div class="alert-delete bg-success text-light">
          {{Session::get("message-success")}}

      </div>
    @endif
    @if(Session::has("message-fail"))
    <div class="alert-delete bg-danger text-light">
        {{Session::get("message-fail")}}

    </div>
    @endif

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

    <script src="{{URL('assets/JS/backend.js')}}"></script>

</body>

</ht ml>
