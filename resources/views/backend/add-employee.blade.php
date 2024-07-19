@extends('backend.master-admin')
@section('content')
<div class="title-page">
  <span>Add Tester Info</span>
</div>
<div class="dashboard-body">
  <div class="dashboard-body-sub">   
<form action="/admin/add/employee/submit" method="POST">
  @csrf
    <div class="row mt-5">
      <div class="sub-left">
        <label for="">Serail No.</label>
        <input type="text" name="state-test" value="1" class="d-none">
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
            <select class="form-control" name="level" id="select_admin" onchange="admin_onchange()" >
              <option value="1">Tester</option>
              <option value="2">Admin</option>
            </select>
          </div>
        </div>
      </div>
      <div class="sub-right">

        <div class="row">
          <div class="col-6">
            <label for="">Department</label>
            <select class="form-control" name="deparment" id="department" onchange="updatedepartment()">
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
            <div id="custom_department_Container"   style="display: none;">
              <label for="customInput">New Department:</label>
              <input type="text" id="department-state" name="department-state" value="0" style="display: none;">
              <input type="text" class="form-control" id="customInput" name="customdepartment">
            </div>
          </div>
        </div>


      </div>
    </div>
    <div class="password-hide">
      <div class="row ">
        <div class="sub-left ">
          <label for="">Password</label>
          <input type="text" name="password-state" id="password-state" class="form-control d-none">
          <input type="password" name="password"  class="form-control"> </div>
        <div class="sub-right"></div>
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

 
@endsection