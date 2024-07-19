@extends('backend.master-admin')
@section('content')
<div class="title-page">
  <span>Add Product For Test</span>
</div>
<div class="dashboard-body">
  <div class="dashboard-body-sub">  
        <form action="/admin/add/product/submit" method="POST">
          @csrf
            <div class="row mt-5">
              <div class="sub-left">
                <label for="">Item Code</label>
                <input type="text"  name = "code" class="form-control ">
              </div>
              <div class="sub-right">
                <label for="">Item Name</label>
                <input type="text" name="name" class="form-control ">

              </div>
            </div>
            <div class="row">
              <div class="sub-left">
                <label for="">Variant</label>
                <input type="text" name="variant" class="form-control ">
              </div>
              <div class="sub-right">
                <div class="row">
                  <div class="col-12">
                    <label for="">Quantity and Unit</label>
                    <input type="text" name="size" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="sub-left">
                <label for="">Lot No.</label>
                <input type="text" name="lot" class="form-control">
              </div>
              <div class="sub-right">
                <label for="">Manufacturing Date</label>
                <input class="form-control" name="pro-date" type="date">
              </div>
            </div>
            <div class="row">
              <div class="sub-left">
                <div class="row">
                  <div class="col-6">
                    <label for="">Category</label>
                    <select class="form-control" name="category" id="categorycode" onchange="updatecategoryInput()">
                      <option value=""></option>
                      <option value="custom">Add New</option>
                      @if (!empty($category))
                          @foreach ($category as $item)
                              <option value="{{$item->name}}">{{$item->name}}</option>
                          @endforeach
                      @endif
       
                    </select>
                  </div>
                  <div class="col-6">
                    <div id="customCategoryContainer" style="display: none;">
                      <label for="customInput">Custom Category:</label>
                      <input type="text" class="d-none" name="category-state" id="category-state" value="0">
                      <input type="text" class="form-control" id="customInput" name="customcategory">
                    </div>
                  </div>
                </div>

              </div>
              <div class="sub-right">
                <div class="row">
                  <div class="col-6">
                    <input type="text" class="d-none" name="track_state" value="0" id="trackcode-state">
                    <label for="">Lot Tracking Code</label>
                    <select class="form-control" name="trackcode" id="Trackcode" onchange="updateTrackInput()">
                      @if (!@empty($trackcode))
                            @foreach ( $trackcode as $item)
                              <option value="{{$item->name}}">{{$item->name}}</option>
                            @endforeach
                      @endif
                      <option value=""></option>
                      <option value="custom">Add New</option>
                    </select>
                  </div>
                  <div class="col-6">
                    <div id="customtrackcodeContainer" style="display: none;">
                      <label for="customInput">Custom Lot Tracking Code:</label>
                      <input type="text" class="form-control" id="customInput" name="customtrack">
                    </div>
                  </div>
                </div>
              </div>
            </div>
        

            <div class="row">
              <div class="full-sub">
                <label for="">Description</label>
                <textarea id="" cols="30" rows="5" name="description" class="form-control"></textarea>
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