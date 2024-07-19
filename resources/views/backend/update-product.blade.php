@extends('backend.master-admin')
@section('content')
<div class="title-page">
  <span>Update Product</span>
</div>
<div class="dashboard-body">
  <div class="dashboard-body-sub">  
        <form action="/admin/update/product/submit" method="POST">
          @csrf
            <div class="row mt-5">
              <div class="sub-left">
                <label for="">Item Code</label>
                <input type="text" name="id" value="{{$id}}" class="d-none">
                <input type="text" value="{{$product[0]->item_code}}" name = "code" class="form-control ">
              </div>
              <div class="sub-right">
                <label for="">Item Name</label>
                <input type="text" name="name"  value="{{$product[0]->name}}"  class="form-control ">

              </div>
            </div>
            <div class="row">
              <div class="sub-left">
                <label for="">Variant</label>
                <input type="text" name="variant"  value="{{$product[0]->variant}}"  class="form-control ">
              </div>
              <div class="sub-right">
                <div class="row">
                  <div class="col-12">
                    <label for="">Quantity and Unit</label>
                    <input type="text" name="size"  value="{{$product[0]->size}}"  class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="sub-left">
                <label for="">Lot No.</label>
                <input type="text" name="lot"  value="{{$product[0]->lot_no}}"  class="form-control">
              </div>
              <div class="sub-right">
                <label for="">Manufacturing Date</label>
                <input class="form-control" name="pro-date" value="{{$product[0]->manufacturing_date}}" type="date">
              </div>
            </div>
            <div class="row">
              <div class="sub-left">
                <div class="row">
                  <div class="col-6">
                    <label for="">Category</label>
                    <select class="form-control" name="category" id="categorycode2" onchange="updatecategoryInput2()">
                      <option value="{{$product[0]->category}}">{{$product[0]->category}}</option>
                      <option value="custom">Add New</option>
                      <option value=""></option>
                      @if (!empty($category))
                          @foreach ($category as $item)
                            @if($item->name != $product[0]->category)
                              <option value="{{$item->name}}">{{$item->name}}</option>
                              @endif
                          @endforeach
                      @endif
       
                    </select>
                  </div>
                  <div class="col-6">
                    <div id="customCategoryContainer" style="display: none;">
                      <label for="customInput">Custom Category:</label>
                      <input type="text" class="d-none" name="category-state" id="category-state2" value="0">
                      <input type="text" class="form-control" id="customInput" name="customcategory">
                    </div>
                  </div>
                </div>

              </div>
              <div class="sub-right">
                <div class="row">
                  <div class="col-6">
                    <input type="text" class="d-none" name="track_state" value="0" id="trackcode-state2">
                    <label for="">Lot Tracking Code</label>
                    <select class="form-control" name="trackcode" id="Trackcode" onchange="updateTrackInput2()">
                        <option value="{{$product[0]->lot_tracking}}">{{$product[0]->lot_tracking}}</option>
                      @if (!empty($trackcode))
                            @foreach ( $trackcode as $item)
                                @if($item->name != $product[0]->lot_tracking)
                                <option value="{{$item->name}}">{{$item->name}}</option>
                                @endif
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
                <textarea id="" cols="30" rows="5" name="description" class="form-control">{{$product[0]->description}}</textarea>
              </div>
            </div>
      
          
            <div class="row mt-5">
              <div class="full-sub">
                <div class="align-right ">
                  <button class="btn-submit" type="submit">Submit</button>
                </div>
              </div>
              
            </div>
          </form>
        </div>
      </div>
@endsection