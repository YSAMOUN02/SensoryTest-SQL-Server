@extends('backend.master-admin')
@section('content')
<div class="title-page">
  <span>Update Tester Info</span>
</div>
<div class="dashboard-body">
  <div class="dashboard-body-sub">   
<form action="/admin/update/employee/submit" method="POST">
  @csrf
    <div class="row mt-5">
      <div class="sub-left">
        <label for="">Serail No.</label>
        <input type="text" value="{{$employee[0]->id}}" name="id" class="d-none">
        <input type="text" class="form-control " value="{{$employee[0]->serial}}" name="serial" placeholder="Number...." autocomplete="off">
      </div>
      <div class="sub-right">
        <label for="">ID</label>
        <input type="text" class="form-control " value="{{$employee[0]->idem}}" name ="id-em" placeholder="INVXXXX" autocomplete="off">

      </div>
    </div>
    <div class="row">
      <div class="sub-left">
        <label for="">Name</label>
        <input type="text" class="form-control " value="{{$employee[0]->name}}" name="name" autocomplete="off">
      </div>
      <div class="sub-right">
        <div class="row">
          <div class="col-12">
            <label for="">Date of Birth</label>
            <input type="date" class="form-control" value="{{$employee[0]->dob}}" name="age" autocomplete="off">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="sub-left">
        <div class="row">
          <div class="col-12">
            <label for="">Position</label>
            <input type="text" class="form-control" value="{{$employee[0]->position}}" name="position">
          </div>
        
        </div>
      </div>
      <div class="sub-right">

        <div class="row">
          <div class="col-6">
            <label for="">Department</label>
            <select class="form-control" name="department" id="department" onchange="updatedepartment()">
             
              <option value="{{$employee[0]->department}}">{{$employee[0]->department}}</option>
              <option value="custom">Add New</option>
              @if (!empty($department)) 
                    @foreach ($department as $item)
                        @if($item->name != $employee[0]->department)
                                <option value="{{$item->name}}">{{$item->name}}</option>
                        @endif
                    @endforeach
            @endif
        
              <option value=""></option>
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



    <div class="row">
      <div class="full-sub">
        <label for="">remark</label>
        <input class="form-control" value="{{$employee[0]->remark}}" name="remark" type="text">
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