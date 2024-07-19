
@extends('backend.master-admin')

@section('content')

<div class="title-page">
    <span>View Tester Info</span>
</div>

<div class="dashboard-body">
    <div class="dashboard-body-sub">
        <span class="nodata">No Data Match</span>

        <table class="table table-dark align-middle">
            <thead>
                <tr>
                    <th>Serail No.</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date of birth</th>
                    <th>Position</th>
                    <th>Department</th>
                   
    
                    <th>Action</th>
                </tr>
                <tr>
                    @foreach ($users as $item)
                       <tr>
                        <td>{{$item->serail}}</td>
                        <td>{{$item->idem}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->dob}}</td>
                 
                        <td>{{$item->position}}</td>
                        <td>{{$item->department}}</td>
                        <td>
                            <a href="/admin/update/admin/{{$item->id}}"><button class="btn-update">Update</button></a>
                            <button   class="btn-delete-user">Delete
                                <input  class="d-none" type="text" value="{{$item->id}}" >

                            </button>
                        </td>   
                       </tr>
                    @endforeach
                </tr>
            </thead>

        </table>

 
    </div>
</div>
<div class="alert-confirm-delete-user">
    <div class="inner-alert">
        <span>Are you sure?</span>
        <div class="btn-confirm">
            <form action="/admin/delete/admin">
              <input type="text" data-id-2   id="id-delete-admin" name="delete_id" class="d-none">
              <button>Yes</button>
            </form>
            <button class="alert-no" onclick="hide_altert_delete_user()" >No</button>
        </div>
    </div>
</div>

<script>
    // Alert Delete Bar
document.addEventListener("DOMContentLoaded", function () {
    var btn_delete = document.querySelectorAll(".btn-delete-user");
    btn_delete.forEach(function (button) {
        button.addEventListener("click", function () {
   
            document.querySelector(".alert-confirm-delete-user").style.display = "block";
            var itemId = button.parentElement.querySelector("input").value;
         
            document.getElementById("id-delete-admin").value = itemId;
         
        });
    });
});

function hide_altert_delete_user(){
    document.querySelector(".alert-confirm-delete-user").style.display = "none";
}


</script>
@endsection
