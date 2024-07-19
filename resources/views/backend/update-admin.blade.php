@extends('backend.master-admin')
@section('content')
<div class="title-page">
  <span>Add Tester Info</span>
</div>
<div class="dashboard-body">
  <div class="dashboard-body-sub">   
<form action="/admin/update/admin/submit" method="POST">
  @csrf
    <div class="row mt-5">
      <div class="sub-left">
        <label for="">Serail No.</label>
        <input type="text" name="state-test" value="1" class="d-none">
        <input type="text" class="form-control  d-none" value="{{$admin[0]->id}}" name ="id"  >
        <input type="text" class="form-control " value="{{$admin[0]->serail}}" name="serial" placeholder="Number...." autocomplete="off">
      </div>
      <div class="sub-right">
        <label for="">ID</label>
        <input type="text" class="form-control " value="{{$admin[0]->idem}}" name ="idem" placeholder="INVXXXX" autocomplete="off">

      </div>
    </div>
    <div class="row">
      <div class="sub-left">
        <label for="">Name</label>
        <input type="text" class="form-control " name="name" value="{{$admin[0]->name}}" autocomplete="off">
      </div>
      <div class="sub-right">
        <div class="row">
          <div class="col-12">
            <label for="">Date of Birth</label>
            <input type="date" class="form-control" name="age" value="{{$admin[0]->dob}}" autocomplete="off">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="sub-left">
        <div class="row">
          <div class="col-12">
            <label for="">Position</label>
            <input type="text" class="form-control" name="position" value="{{$admin[0]->position}}">
          </div>
       
        </div>
      </div>
      <div class="sub-right">

        <div class="row">
          <div class="col-12">
            <label for="">Department</label>
            <select class="form-control" name="deparment" id="department" onchange="updatedepartment()">
                <option value="{{$admin[0]->department}}">{{$admin[0]->department}}</option>  
                <option value=""></option>
                
              @if (!empty($department))
                   
              @foreach ($department as $item)

                <option value="{{$item->name}}">{{$item->name}}</option>
                @endforeach
              @endif
            </select>
          </div>
          
        </div>


      </div>
    </div>

      <div class="row ">
        <div class="full-sub ">
          <label for="">Password</label>
          <input type="text" name="password"  class="form-control">
          <input type="text" name="old_pass" value="{{$admin[0]->password}}"  class="form-control d-none"> 
        </div>
        <div class="sub-right"></div>
      </div>

   


    <div class="row">
      <div class="full-sub">
        <label for="">Remark</label>
        <input class="form-control" name="remark" value="{{$admin[0]->remark}}" type="text">
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