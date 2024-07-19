@extends('backend.master-admin')
@section('content')
<div class="title-page">
    <span>View Sensery Test</span>
  </div>
  <div class="dashboard-body">
    <div class="dashboard-body-sub">
      <span class="nodata">No Data Match</span>
      <table class="table table-dark  table-responsive     align-middle" id="testList">


      </table>
      <div class="bottom-bar">

        <input class="search-bar" id="search-test-view" type="text"><i class="fa-solid fa-magnifying-glass"></i>
      </div>
    </div>
  </div>
  <div class="alert-confirm-delete-test">
    <div class="inner-alert">
        <span>Are you sure?</span>
        <div class="btn-confirm">
            <form action="/admin/delete/test">
              <input type="text"  id="id-delete-test" name="delete-id" class="d-none">
              <button>Yes</button>
            </form>
            <button class="alert-no" onclick="hide_alert_delete_test()" >No</button>
        </div>
    </div>
</div>

<script>

const Array_test = @json($test);

function fill_data_table_view_test(items) {
    var TestTable = document.getElementById("testList");
    TestTable.innerHTML = `
                <thead>
                 <div class="theader">
                     <tr>
                          <th>Test ID</th>
                         <th>Test Title</th>
                         <th>Product</th>
                         <th>Test Method</th>
                         <th>Due Date</th>
                         <th>Created Date</th>
                         <th>Status</th>
                      
                         <th>Action</th>
                     </tr>
                 </div>
                 </thead>
         `;
    if (items == "") {

        document.querySelector(".nodata").style.display = 'block';
    }
    else {
        document.querySelector(".nodata").style.display = 'none';
        for (var i = 0; i < items.length; i++) {

            TestTable.innerHTML += `
            <tr>
           <td>${items[i].id}</td>
           <td>${items[i].title}</td>
           <td>${items[i].method}</td>
           <td>${items[i].product}</td>
           <td>${items[i].due_date}</td>
           <td>${items[i].created_at}</td>
           <td>${items[i].status}</td>
        
            
           <td>
           <a href="/admin/view/result/${items[i].id}"><button >Result</button></a> 
             <button class="delete-test">Delete
                <input type="text" value="${items[i].id}" class="d-none">
              </button> </td>  
            </tr>
            `;
        }
    }
}
fill_data_table_view_test(Array_test);

document.querySelector("#search-test-view").addEventListener("keyup", function () {
  var search = this.value.toLowerCase();
  var new_arr_tester = test_arr.filter(function (val) {
    if (
      val.test_id.toString().includes(search) ||
      val.title.toLowerCase().includes(search) ||
      val.product.toString().includes(search) ||
      val.method.toString().includes(search) ||
      val.due_date.toLowerCase().includes(search) ||
      val.status.toLowerCase().includes(search)
    ) {

      var new_obj_tester = {
        test_id: val.test_id,
        title: val.title,
        product: val.product,
        method: val.method,
        due_date: val.due_date,
        status: val.status,
      };

      return new_obj_tester;

    }

  });

  fill_data_table_view_test(new_arr_tester);
});
  </script>
@endsection