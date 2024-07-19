@extends('backend.master-admin')

@section('content')

<div class="title-page">
    <span>View Tester Info</span>
</div>

<div class="dashboard-body">
    <div class="dashboard-body-sub">
        <span class="nodata">No Data Match</span>

        <table class="table table-dark align-middle" id="testerList">
            <!-- Table content will be dynamically added here -->
        </table>

        <div class="bottom-bar">

            <input class="search-bar" id="search-tester" placeholder="Search.." type="text"><i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>
</div>
<div class="alert-confirm-delete-em">
    <div class="inner-alert">
        <span>Are you sure?</span>
        <div class="btn-confirm">
            <form action="/admin/delete/emolyee">
              <input type="text" data-id-2   id="id-delete-employee" name="delete-id" class="d-none">
              <button>Yes</button>
            </form>
            <button class="alert-no" onclick="hide_alert_delete_em()" >No</button>
        </div>
    </div>
</div>
<script>
    var emlpoyees = @json($employee);

    document.querySelector("#search-tester").addEventListener("keyup", function () {
        var search = this.value.toLowerCase();
        var new_arr = emlpoyees.filter(function (val) { 
            if(val.idem == null){
                val.idem = "";
            }
            if(val.serial == null){
                val.serial = ""
            }
            if(val.name == null){
                val.name = "";
            }
            
            if(val.position == null){
                val.position = "";
            }
            if(val.department == null){
                val.department = "";
            }
            if(val.time == null){
                val.time = "";
            }
            if(val.remark == null){
                val.remark = "";
            }
            if (
                (val.id.toString().includes(search) && val.id != null) ||
                (val.idem.toLowerCase().includes(search) && val.idem != null) ||
                (val.serial.toString().includes(search) && val.serial != null) ||
                (val.name.toLowerCase().includes(search) && val.name != null) ||
                (val.position.toLowerCase().includes(search) && val.position != null) ||
                (val.department.toLowerCase().includes(search) && val.department != null) ||
                (val.time.toString().includes(search) && val.time != null) ||
                (val.remark.toLowerCase().includes(search) && val.remark != null) 
            ) {
                var new_obj = {
                    idem: val.idem,
                    serial : val.serial,
                    name: val.name,
                    position : val.position,
                    department: val.department,
                    age: val.time,
                    remark : val.remark,
                };
                return new_obj;
            }
        });

        fill_data_table_tester(new_arr);
    });
    // Fill Data Table
    var TesterTable = document.querySelector("#testerList");

    function fill_data_table_tester(items) {
        TesterTable.innerHTML = `
            <thead>
                <tr>
                    <th>Serail No.</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Tested</th>
    
                    <th>Action</th>
                </tr>
            </thead>
        `;

        if (items.length === 0) {
            document.querySelector(".nodata").style.display = 'block';
        } else {
            document.querySelector(".nodata").style.display = 'none';
            for (var i = 0; i < items.length; i++) {
                TesterTable.innerHTML += `
                    <tr>
                        <td>${items[i].serial ? items[i].serial:""}</td>
                        <td>${items[i].idem ? items[i].idem:""}</td>
                        <td>${items[i].name?items[i].name : ""}</td>
                        <td>${items[i].dob ? items[i].dob: ""}</td>
                        <td>${items[i].position ? items[i].position :""}</td>
                        <td>${items[i].department? items[i].department :""}</td>
                        <td>${items[i].time ? items[i].time : ""}</td>
       
                        <td><button        class="delete-em">Delete
                            <input data-id3 type="text" value="${items[i].id}" class="d-none">
                            </button>
                            <a href="/admin/update/employee/${items[i].id}"><button  class="btn-update">Update</button></a>
                        </td>

                       
                    </tr>
                `;
            }
        }
    }

    // Initial data filling
    fill_data_table_tester(emlpoyees);





    // Alert Delete Bar
document.addEventListener("DOMContentLoaded", function () {
    var btn_delete = document.querySelectorAll(".delete-em");
    btn_delete.forEach(function (button) {
        button.addEventListener("click", function () {
            var itemId = button.parentElement.querySelector("input").value;
            document.getElementById("id-delete-employee").value = itemId;
            document.querySelector(".alert-confirm-delete-em").style.display = "block";
        });
    });
});
function hide_alert_delete_em(){
    document.querySelector(".alert-confirm-delete-em").style.display = "none";
}
</script>

@endsection
