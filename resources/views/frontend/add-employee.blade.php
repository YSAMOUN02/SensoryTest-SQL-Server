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


  <script src="{{URL('assets/JS/jquery.min.js')}}"></script>
  <title>Sensory Test</title>
</head>

<body>

  <div class="container-fluid">

    <div class="dashboard2">
      <div class="title-page">
        <span>Register</span>
      </div>
      <div class="dashboard-body">
        <div class="dashboard-body-sub2">
          <form action="/admin/add/employee/submit" method="POST">
            @csrf
              <input type="text" name="state-test" value="0" class="d-none">
              <div class="row mt-5">
                <div class="sub-left">
                  <label for="">Serail No.</label>
                  <input type="text" class="form-control " name="serial" placeholder="Number...." autocomplete="off">
                </div>
                <div class="sub-right">
                  <label for="">ID</label>
                  <input type="text" class="form-control " name ="id-em" placeholder="INVXXXX" autocomplete="off">

                </div>
              </div>
              <div class="row">
                <div class="sub-left">
                  <label for="">Name</label>
                  <input type="text" class="form-control " name="name" autocomplete="off">
                </div>
                <div class="sub-right">
                  <div class="row">
                    <div class="col-12">
                      <label for="">Date of Birth</label>
                      <input type="date" class="form-control" name="age" autocomplete="off">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="sub-left">
                  <div class="row">
                    <div class="col-6">
                      <label for="">Position</label>
                      <input type="text" class="form-control" name="position">
                    </div>
                    <div class="col-6">
                      <label for="">Level</label>
                      <select class="form-control" name="level" id="" >
                        <option value="1">Tester</option>

                      </select>
                    </div>
                  </div>
                </div>
                <div class="sub-right">

                  <div class="row">
                    <div class="col-6">
                      <label for="">Department</label>
                      <select class="form-control" name="deparment" id="department2" onchange="updatedepartment2()">
                        <option value=""></option>
                        @if (!empty($department))
                        <option value=""></option>
                        @foreach ($department as $item)

                          <option value="{{$item->name}}">{{$item->name}}</option>
                          @endforeach
                        @endif

                        <option value="custom">Add New</option>
                      </select>
                    </div>
                    <div class="col-6">
                      <div id="custom_department_Container2"   style="display: none;">
                        <label for="customInput">New Department:</label>
                        <input type="text" id="department-state2" name="department-state" value="0" style="display: none;">
                        <input type="text" class="form-control" id="customInput" name="customdepartment">
                      </div>
                    </div>
                  </div>


                </div>
              </div>



              <div class="row">
                <div class="full-sub">
                  <label for="">remark</label>
                  <input class="form-control" name="remark" type="text">
                </div>
              </div>


              <div class="row mt-5">
                <div class="full-sub">
                  <div class="align-right mb-3">
                    <button class="btn-submit" type="submit">Submit</button>
                  </div>
                </div>

              </div>
            </form>
            </div>
      </div>
    </div>
  </div>

  <script src="{{URL('assets/JS/bootstrap.bundle.min.js')}}"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="{{URL('assets/JS/backend.js')}}"></script>


</body>

</html>
