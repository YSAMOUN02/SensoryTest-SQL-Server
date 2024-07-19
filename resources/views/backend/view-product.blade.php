@extends('backend.master-admin')
@section('content')
<div class="title-page">
    <span>View Product</span>
  </div>
  <div class="dashboard-body">
    <div class="dashboard-body-sub">
<span class="nodata">No Data Match</span>
<table class="table table-dark  align-middle" id = "resultList">


  <div class="bottom-bar">

     <input  class="search-bar" id="search-bar-product"  type="text"><i class="fa-solid fa-magnifying-glass"></i>
  </div>
</table>
</div>
</div>

    <script>
 var productData = @json($product);
var myTable = document.getElementById("resultList");
  // JavaScript function to fill the data table
function fill_data_table(items) {
    myTable.innerHTML = `
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Variant</th>
                <th style="width: 15%;">Description</th>
                <th>Lot No.</th>
                <th>Category</th>
                <th>Size</th>
                <th>Action</th>
            </tr>
        </thead>
    `;

    if (items.length === 0) {
        document.querySelector(".nodata").style.display = 'block';
    } else {
        document.querySelector(".nodata").style.display = 'none';
        for (var i = 0; i < items.length; i++) {
            myTable.innerHTML += `
                <tr>

                    <td>${items[i].id}</td>
                    <td>${items[i].code ? items[i].code : ""}</td>
                    <td>${items[i].name ? items[i].name : ""}</td>
                    <td>${items[i].variant? items[i].variant : ""}</td>
                    <td>${items[i].description ? items[i].description : ""}</td>
                    <td>${items[i].lot ? items[i].lot : ''}</td>
                    <td>${items[i].category ? items[i].category : ''}</td>
                    <td>${items[i].size ? items[i].size : ''}</td>
                    <td>
                        <button class="btn-delete">Delete
                            <input data-id="${items[i].id}" class="d-none">
                        </button>
                        <a href="/admin/update/product/${items[i].id}"> <button class="btn-update">Update</button></a>
                    </td>
                </tr>
            `;
        }
    }
}



        document.querySelector("#search-bar-product").addEventListener("keyup", function () {

        var search = this.value.toLowerCase();
        var new_arr = productData.filter(function (val) {

            if(val.name == null){
                val.name = "";

            }
    
            if(val.code == null){
                val.code = "";
            }
            if(val.description == null){
                val.description = "";
            }
            if(val.category == null){
                val.category = "";
            }
            if(val.lot == null){
                val.lot = "";
            }
            if(val.size == null){
                val.size = "";
            }

            if (
                (val.id.toString().includes(search) && val.id != null) ||
                (val.name.toLowerCase().includes(search) && val.name != null) ||
                (val.code.toLowerCase().includes(search) && val.code != null) ||
                (val.description.toLowerCase().includes(search) && val.description != null) ||
                (val.category.toLowerCase().includes(search) && val.category != null) ||
                (val.lot.toLowerCase().includes(search) && val.lot != null) ||
                (val.size.toLowerCase().includes(search) && val.size != null)
            ) {

                var new_obj = {

                    id: val.id,
                    variant : val.variant,
                    name: val.name,
                    code: val.code,
                    description: val.description,
                    category: val.category,
                    lot : val.lot,
                    size : val.size
                };
                return new_obj;
            }
        });

        fill_data_table(new_arr);
    });

    fill_data_table(productData);

    </script>
@endsection
