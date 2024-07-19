







// For new unit create
function updateInput() {
    var unitSelector = document.getElementById("unitSelector");
    var customInputContainer = document.getElementById("customInputContainer");

    if (unitSelector.value === "custom") {
        customInputContainer.style.display = "block";
    } else {
        customInputContainer.style.display = "none";
    }
}

// for new category create
function updatecategoryInput() {
    var unitSelector = document.getElementById("categorycode");
    var customInputContainer = document.getElementById("customCategoryContainer");

    if (unitSelector.value === "custom") {
        customInputContainer.style.display = "block";
        document.querySelector("#category-state").value = 1;

    } else {
        customInputContainer.style.display = "none";
        document.querySelector("#category-state").value = 0;
    }
}

// for new category create
function updatecategoryInput2() {
    var unitSelector = document.getElementById("categorycode2");
    var customInputContainer = document.getElementById("customCategoryContainer");

    if (unitSelector.value === "custom") {
        customInputContainer.style.display = "block";
        document.querySelector("#category-state2").value = 1;

    } else {
        customInputContainer.style.display = "none";
        document.querySelector("#category-state2").value = 0;
    }
}

// for new lot track create
function updateTrackInput() {
    var unitSelector = document.getElementById("Trackcode");
    var customInputContainer = document.getElementById("customtrackcodeContainer");

    if (unitSelector.value === "custom") {
        customInputContainer.style.display = "block";
        document.querySelector("#trackcode-state").value = 1;
    } else {
        customInputContainer.style.display = "none";
        document.querySelector("#trackcode-state").value = 0;
    }
}


// for new lot track create
function updateTrackInput2() {
    var unitSelector = document.getElementById("Trackcode");
    var customInputContainer = document.getElementById("customtrackcodeContainer");

    if (unitSelector.value === "custom") {
        customInputContainer.style.display = "block";
        document.querySelector("#trackcode-state2").value = 1;
    } else {
        customInputContainer.style.display = "none";
        document.querySelector("#trackcode-state2").value = 0;
    }
}

// For create new Department
function updatedepartment() {
    var unitSelector = document.getElementById("department");
    var customInputContainer = document.getElementById("custom_department_Container");

    if (unitSelector.value === "custom") {
        customInputContainer.style.display = "block";
        document.querySelector("#department-state").value = 1;
    } else {
        customInputContainer.style.display = "none";
        document.querySelector("#department-state").value = 0;
    }
}

// For create new Department
function updatedepartment2() {
    var unitSelector = document.getElementById("department2");
    var customInputContainer = document.getElementById("custom_department_Container2");

    if (unitSelector.value === "custom") {
        customInputContainer.style.display = "block";
        document.querySelector("#department-state2").value = 1;
    } else {
        customInputContainer.style.display = "none";
        document.querySelector("#department-state2").value = 0;
    }
}


function alert_close(){
    document.querySelector(".alert-confirm").style.display = "none";
}

function hide_alert_delete_test(){
    document.querySelector(".alert-confirm-delete-test").style.display = "none";
    
}

document.addEventListener("DOMContentLoaded",function(){    
    var btn_delete_test  = document.querySelectorAll(".delete-test");
    btn_delete_test.forEach( function(button){
        button.addEventListener("click" , function(){
           var val  = button.querySelector("input").value;
            document.querySelector("#id-delete-test").value = val;
            document.querySelector(".alert-confirm-delete-test").style.display = "block";
        })
      
    })

})

function admin_onchange(){
    var select_val = document.getElementById("select_admin").value;
    if(select_val == 2){
        document.querySelector(".password-hide").style.display = "block";
        document.getElementById("password-state").value = 1;
    }
    else{
        document.querySelector(".password-hide").style.display = "none";
        document.getElementById("password-state").value = 0;
    } 
  }


// Alert Delete Bar
document.addEventListener("DOMContentLoaded", function () {
    var btn_delete = document.querySelectorAll(".btn-delete");
    btn_delete.forEach(function (button) {
        button.addEventListener("click", function () {
            var itemId = button.parentElement.querySelector("input").getAttribute("data-id");
            document.getElementById("id-delete-box").value = itemId;
            document.querySelector(".alert-confirm").style.display = "block";
        });
    });
});




        window.addEventListener("load", function () {
            btn_load =  document.querySelector(".blur");
            btn_load.style.display = "block";
        
        });

        window.addEventListener("load", function () {
            btn_load =  document.querySelector(".blur");
            btn_load.style.animation = "fade-out 1s forwards";
        });


    



function same_test_option_same(options) {
    var select_elements = document.querySelectorAll(".select-product-and-method-same");

    select_elements.forEach(function (select_element) {
        // Clear existing options
        select_element.innerHTML = '';

        // Add new options based on the provided array
        options.forEach(function (optionText) {
            var option = document.createElement("option");
            option.value = optionText['id'];

            option.text = "Item Code:\xA0\xA0" + optionText['code'] + "\xA0\xA0Varaint:\xA0\xA0" + optionText['variant'] + "\xA0\xA0 \xA0\xA0 Lot:\xA0" + optionText['lot'] + "\xA0\xA0 \xA0\xA0Item_Name:\xA0" + optionText['name'];
            select_element.appendChild(option);
        });
    })
}

function same_test_option_ranking(options) {
    var select_elements = document.querySelectorAll(".select-product-and-method-ranking");

    select_elements.forEach(function (select_element) {
        // Clear existing options
        select_element.innerHTML = '';

        // Add new options based on the provided array
        options.forEach(function (optionText) {
            var option = document.createElement("option");
            option.value = optionText['id'];

            option.text = "Item Code:\xA0\xA0" + optionText['code'] + "\xA0\xA0Varaint:\xA0\xA0" + optionText['variant'] + "\xA0\xA0 \xA0\xA0 Lot:\xA0" + optionText['lot'] + "\xA0\xA0 \xA0\xA0Item_Name:\xA0" + optionText['name'];
            select_element.appendChild(option);
        });
    })
}

function same_test_option_rating(options) {
    var select_elements = document.querySelectorAll(".select-product-and-method-rating");

    select_elements.forEach(function (select_element) {
        // Clear existing options
        select_element.innerHTML = '';

        // Add new options based on the provided array
        options.forEach(function (optionText) {
            var option = document.createElement("option");
            option.value = optionText['id'];

            option.text = "Item Code:\xA0\xA0" + optionText['code'] + "\xA0\xA0Varaint:\xA0\xA0" + optionText['variant'] + "\xA0\xA0 \xA0\xA0 Lot:\xA0" + optionText['lot'] + "\xA0\xA0 \xA0\xA0Item_Name:\xA0" + optionText['name'];
            select_element.appendChild(option);
        });
    })
}
function same_test_option_difference(options) {
    var select_elements = document.querySelectorAll(".select-product-and-method-difference");

    select_elements.forEach(function (select_element) {
        // Clear existing options
        select_element.innerHTML = '';

        // Add new options based on the provided array
        options.forEach(function (optionText) {
            var option = document.createElement("option");
            option.value = optionText['id'];

            option.text = "Item Code:\xA0\xA0" + optionText['code'] + "\xA0\xA0Varaint:\xA0\xA0" + optionText['variant'] + "\xA0\xA0 \xA0\xA0 Lot:\xA0" + optionText['lot'] + "\xA0\xA0 \xA0\xA0Item_Name:\xA0" + optionText['name'];
            select_element.appendChild(option);
        });
    })
}





var array_product = [];


function close_panel_add_product() {
    document.querySelector(".add-product").style.display = "none";
}

function refill_data_table() {
    var product_table_select = document.getElementById("table-select-product");
    document.querySelector(".add-product").style.display = "block";
    // Clear existing rows in the table
    product_table_select.innerHTML = `
            <tr>
                 <th>ID</th>
                <th>Code</th>
                <th>Item Name</th>
                <th>variant</th>
                <th>Lot No</th>
                <th>Category</th>
                <th>Lot Tracking code</th>
                <th>Remove</th>
            </tr>
        `;

    if (array_product.length > 0) {
        array_product.forEach((element, index) => {
            product_table_select.innerHTML += `
                    <tr>
                        <td>${element.id}</td>
                        <td>${element.code}</td>
                        <td>${element.name}</td>
                        <td>${element.variant}</td>
                        <td>${element.lot}</td>
                        <td>${element.category}</td>
                        <td>${element.track}</td>
                        <td><button onclick="removeRow(this, ${index})">Remove</button></td>
                    </tr>
                `;
        });
    }
}
function removeRow(button) {
    var row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);

    array_product.splice(rownum - 1, 1);
    rownum = rownum - 1;
    document.querySelector("#max-product").style.display = "none";
    same_test_option_same(array_product);
    same_test_option_ranking(array_product);
    same_test_option_rating(array_product);
    same_test_option_difference(array_product);
    return rownum;
}



function refill_data_table_method() {
    document.querySelector(".add-method").style.display = "block";
}


function close_panel_add_method() {
    document.querySelector(".add-method").style.display = "none";
}



var append_child_state = 4;
function append_parameter(state) {
    var append_child = document.querySelector(".appen-child");

    if (append_child) {
        if (state == 1) {
            if (append_child_state < 5) {
                var placeholder = (append_child_state == 3) ? "C" : "D";
                var new_div = document.createElement('div');
                new_div.innerHTML = `
                    <div class="col-12" id="remove-child${append_child_state}">
                        <div class="row">
                            <label for="">គំរូ ${append_child_state - 1}</label>

                            <div class="col-2"><input type="text" placeholder="${placeholder}"  name="test1-label${append_child_state}" class="form-control">
                                <input type="text" name="same-main-state" class="d-none" value="1">
                            </div>
                            <div class="col-10">
                                <select class="select-product-and-method-same form-control"  name="test1-option${append_child_state}" >

                                </select>
                            </div>
                        </div>
                    </div>
                `;

                append_child.appendChild(new_div);
                append_child_state++;  // Increment after adding the new child
                same_test_option_same(array_product);
            } else {
                document.querySelector("#max-sample").style.display = "block";
            }
        } else {
            // Remove the last child
            var lastChild = append_child.lastElementChild;

            if (lastChild) {
                append_child.removeChild(lastChild);
                append_child_state = Math.max(2, append_child_state - 1);  // Ensure append_child_state doesn't go below 2
                document.querySelector("#max-sample").style.display = "none";
            }
        }
    } else {
        console.log("Element with class 'appen-child' not found");
    }
}
var append_child_state2 = 4;
function append_parameter2(state) {

    var append_child = document.querySelector(".appen-child2");

    if (append_child) {
        if (state == 1) {
            if (append_child_state2 < 5) {
                var placeholder = (append_child_state2 == 3) ? "C" : "D";
                var new_div = document.createElement('div');
                new_div.innerHTML = `
                    <div class="col-12" id="remove-child${append_child_state2}">
                        <div class="row">
                            <label for="">គំរូ ${append_child_state2}</label>
                            <div class="col-2"><input type="text" placeholder="${placeholder}" name="test2-label${append_child_state2}" class="form-control"></div>
                            <div class="col-10">
                                <select class="select-product-and-method-difference form-control" name="test2-option${append_child_state2}">

                                </select>
                            </div>
                        </div>
                    </div>
                `;

                append_child.appendChild(new_div);
                append_child_state2++;  // Increment after adding the new child
                same_test_option_difference(array_product);
            } else {
                document.querySelector("#max-sample2").style.display = "block";
            }
        } else {
            // Remove the last child
            var lastChild = append_child.lastElementChild;

            if (lastChild) {
                append_child.removeChild(lastChild);
                append_child_state2 = Math.max(2, append_child_state2 - 1);  // Ensure append_child_state doesn't go below 2
                document.querySelector("#max-sample2").style.display = "none";
            }
        }
    } else {
        console.log("Element with class 'appen-child' not found");
    }
}

var method_auto_increment = 1;
var test_status1 = 0;
var test_status2 = 0;
var test_status3 = 0;
var test_status4 = 0;
var test_status5 = 0;
function method_select() {
    if (array_product.length > 0) {
        var select_method = document.getElementById("select-method-option");
        var table_method = document.getElementById("table-select-method");
        var test_name = "";

        if (select_method.value == 1 && test_status1 == 0) {
            test_name = "Find The Same (ស្វែងរកផលិតផលដែលដូចផលិតផលគោល​ឬ Lot គោល ក្នុងចំណោមផលិតផលផ្សេង)";
            method_no = 1;
            test_status1 = 1;

        } else if (select_method.value == 2 && test_status2 == 0) {
            test_name = "Diferences Test(ស្វែងរកផលិតផលដែលខុស ពី ផលិតផលគោល)";
            method_no = 2;
            test_status2 = 1;
        } else if (select_method.value == 3 && test_status3 == 0) {
            test_name = "Rating (ដាក់ពិន្ទុលើផលិតផលគោល ឬ ផលិតផលផ្សេងទៀត)";
            test_status3 = 1;
            method_no = 3;
        }
        else if (select_method.value == 4 && test_status4 == 0) {
            test_name = "Ranking (តម្រៀបផលិតផលគោលនិង ផលិតផលផ្សេងទៀត​ តាមចំណាត់ថ្នាក់)";
            test_status4 = 1;
            method_no = 4;
        }
        else if (select_method.value == 0) {

        }
        else {
            alert("You can not select the same Test Method")
        }
        if (method_auto_increment < 5) {
            if (test_name != "") {
                table_method.innerHTML += `
            <tr>
                <td>${method_auto_increment}</td>
                <td>${test_name}</td>
                <td><button onclick="removeRowMethod(this,${select_method.value})">Remove</button> </td>
            </tr>

            `; test_name = "";
                method_auto_increment++;
                if (method_no == 1) {
                    extended_class(method_no);
                    same_test_option_same(array_product);
                } else if (method_no == 2) {
                    extended_class(method_no);
                    same_test_option_difference(array_product);
                }
                else if (method_no == 3) {
                    extended_class(method_no);
                    same_test_option_rating(array_product);
                }
                else if (method_no == 4) {
                    extended_class(method_no);
                    same_test_option_ranking(array_product)
                }

                document.getElementById("test-select-product-first").style.display = "none";
                method_no = 0;
            }




        }
        else {
            document.getElementById("test-max").style.display = "block";
        }
    }
    else {
        document.getElementById("test-select-product-first").style.display = "block";
    }
}
function removeRowMethod(button, state) {
    var row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
    if (state == 1) {
        test_status1 = 0;
        document.querySelector(".the-same-test").style.display = "none";
        var k = document.querySelector("#status-method-1").value = 0;
    } else if (state == 2) {
        test_status2 = 0;
        document.querySelector(".the-difference-test").style.display = "none";
        document.querySelector("#status-method-2").value = 0;
    } else if (state == 3) {
        test_status3 = 0;
        document.querySelector(".rating-test").style.display = "none";
        document.querySelector("#status-method-3").value = 0;

    }
    else if (state == 4) {
        test_status4 = 0;
        document.querySelector(".ranking-test").style.display = "none";
        document.querySelector("#status-method-4").value = 0;
    }

    method_auto_increment = method_auto_increment - 1;
}


function extended_class(state) {
    var parent_class = document.querySelector(".extent-text");
    var new_class = document.createElement('div');

    if (state == 1) {
        if (parent_class && parent_class.querySelector(".the-same-test")) {
            document.querySelector(".the-same-test").style.display = "block";
        } else {
            new_class.className = "the-same-test";
            new_class.innerHTML = `

            <div class="col-12">
            <div class="row">
                <div class="test-title">
                <span class="text-danger">The Duo-Trio Test Test Method <button class="question-mark" onclick="click_show_same()" type="button"><i
                        class="fa-solid fa-circle-question"></i></button></span>
                <br>

                <input type="text" class="form-control" name="test1-title" placeholder="តើគំរូមួយណាដូចទៅនិង គំរូគោល​ ?">
                </div>

                <div class="row">
                    <label for="">ជ្រើសរើសផលិតផលគោល</label>
                <div class="col-2">
                  <input type="text" placeholder="A" name="test1-label1-main"  class=" form-control">
                </div>

                <div class="col-10">
                <select class="select-product-and-method-same form-control" name="test1-main" id=""> </select>
                </div>
                <div class="col-12">
                <label for="">ជ្រើសរើសផលិតផលដែលដូចផលិតផលគោល</label>
                    <select class="select-product-and-method-same form-control" name="test1-option-same-main" id=""> </select>

                </div>
                <div class="col-12 mt-3">

                    <input type="text" class="d-none" name="method-state1" id="status-method-1" value="1">
                    <button type="button" onclick="append_parameter(1)">ថែមគំរូ</button>
                    <button type="button" onclick="append_parameter(2)">ដកគំរូ</button>
                    <span id="max-sample" class="text-danger">Sample Max</span>
                </div>

                    <div class="col-12">
                    <div class="row">
                        <label for="">គំរូ 1</label>
                        <div class="col-2"><input type="text" placeholder="B" name="test1-label2"  class=" form-control"></div>
                        <div class="col-10">
                        <select class="select-product-and-method-same form-control" name="test1-option2" id="">

                        </select>
                        </div>
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="row">
                        <label for="">គំរូ 2</label>
                        <div class="col-2"><input type="text" placeholder="C" name="test1-label3" class=" form-control"></div>
                        <div class="col-10">
                        <select class="select-product-and-method-same form-control" name="test1-option3" id="">

                        </select>
                        </div>
                    </div>
                    </div>

                    <div class="appen-child"></div>
            </div>


        </div>
        </div>
    `;

            parent_class.appendChild(new_class);
        }
    } else if (state == 2) {
        if (parent_class && parent_class.querySelector(".the-difference-test")) {

            document.querySelector(".the-difference-test").style.display = "block";
        } else {
            new_class.className = "the-difference-test";
            new_class.innerHTML += `

            <div class="col-12">
            <div class="row">
              <div class="test-title">
                <span class="text-danger">Triangle Test Method <button class="question-mark" onclick="click_show_diff()" type="button">
             
                    
                    
                <i  class="fa-solid fa-circle-question"></i></button></span>
                <br>
                <input type="text" class="form-control" name="test2-title"  placeholder="តើគំរូមួយណាដែលខុសគេ ក្នុងចំណោមផលិតផលដែលមាន ?">
              </div>

              <div class="row">
                <div class="col-12">
                  <label for="">ជ្រើសរើសផលិតលផលដែលខុសគេ</label>
                  <select class="select-product-and-method-difference form-control" name="test2-main" >

                  </select>
                </div>
                <div class="col-12 mt-3">

                  <input type="text" class="d-none" name="method-state2" id="status-method-2" value="1">
                  <button type="button" onclick="append_parameter2(1)">ថែមគំរូ</button>
                  <button type="button" onclick="append_parameter2(2)">ដកគំរូ</button>
                  <span id="max-sample2" class="text-danger">Sample Max</span>
                </div>

                <div class="col-12">
                  <div class="row">
                    <label for="">គំរូ 1</label>
                    <div class="col-2"><input type="text" placeholder="A" name="test2-label1" class="form-control"></div>
                    <div class="col-10">
                      <select class="select-product-and-method-difference form-control" name="test2-option1" id="">

                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                <div class="row">
                  <label for="">គំរូ 2</label>
                  <div class="col-2"><input type="text" placeholder="B" name="test2-label2" class="form-control"></div>
                  <div class="col-10">
                    <select class="select-product-and-method-difference form-control" name="test2-option2" id="">

                    </select>
                  </div>
                </div>
              </div>
                <div class="col-12">
                  <div class="row">
                    <label for="">គំរូ 3</label>
                    <div class="col-2"><input type="text" placeholder="C" name="test2-label3" class="form-control"></div>
                    <div class="col-10">
                      <select class="select-product-and-method-difference form-control" name="test2-option3" id="">

                      </select>
                    </div>
                  </div>
                </div>
                <div class="appen-child2"></div>
              </div>

            </div>
          </div>

        `;
            parent_class.appendChild(new_class);
        }
    }
    else if (state == 3) {

        if (parent_class && parent_class.querySelector(".rating-test")) {

            document.querySelector(".rating-test").style.display = "block";
        } else {
            new_class.className = "rating-test";
            new_class.innerHTML = `

        <div class="col-12">
          <div class="row">
            <div class="test-title">
              <span class="text-danger">The Rating Test (តេស្តពីចំណង់ចំណូលចិត្ត) <button onclick="click_show_rating()" class="question-mark"
                  type="button"><i class="fa-solid fa-circle-question"></i></button></span>
                  
              <br>
              
              <label for=""></label>
              <input type="text" name="test3-title"  placeholder ="ចូរអោយពិន្ទុលើផលិតផលដែលមាន ?" class="form-control">
            </div>

            <div class="row">

              <div class="col-12 mt-3">
              <input type="text" name="method-state3" id="status-method-3" class="d-none" value="1">
                <button type="button" onclick="append_parameter_rating(1)">ថែមគំរូ</button>
                <button type="button" onclick="append_parameter_rating(2)">ដកគំរូ</button>
                <span id="max-sample-rating" class="text-danger">Sample Max</span>
              </div>

              <div class="col-12">
                <div class="row">
                  <label for="">គំរូ 1</label>
                  <div class="col-2"><input type="text" name="test3-label1" placeholder="A" class="form-control"></div>
                  <div class="col-10">
                    <select class="select-product-and-method-rating form-control" name="test3-option1" id="">

                    </select>
                  </div>
                </div>
              </div>


              <div class="appen-child-rating-test"></div>
              <hr class="mt-3" style="border: 1px solid white;">

              <div class="col-12 mt-3">
              <input type="text" name="method-state3" id="status-method-3" class="d-none" value="1">
                <button type="button" onclick="append_rating(1)">ថែមគំរូ</button>
                <button type="button" onclick="append_rating(2)">ដកគំរូ</button>
                <span id="max-sample-rating2" class="text-danger">Sample Max</span>
              </div>
              <div>
              <div class="col-12" id="remove-child1">
                    <div class="row">
                        <label for="">តំលៃទី 1</label>
                        <div class="col-12"><input type="text"  name="value1" placeholder="រសជាតិ" class="form-control"></div>
                    </div>
                    <div class="col-12" id="remove-child1">
                    <div class="row">
                        <label for="">តំលៃទី 2</label>
                        <div class="col-12"><input type="text"  name="value2" placeholder="ខ្លិន" class="form-control"></div>
                    </div>
                </div>
                <div class="col-12" id="remove-child1">
                <div class="row">
                    <label for="">តំលៃទី 3</label>
                    <div class="col-12"><input type="text"  name="value3" placeholder="ភាពចូលចិត្តទូទៅ" class="form-control"></div>
                </div>
              </div>
              <div class="appen-child-rating">

            </div>
                </div>
              </div>

              <hr class="mt-3" style="border: 1px solid white;">
              <div class="row">
                <label for="">ALL Comment Rate 1-10</label>

              </div>

              <div class="row">
                <div class="col-2"><label for="">1</label><input name="add-on1" placeholder="មិនចូលចិត្តខ្លាំងណាស់" value= "មិនចូលចិត្តខ្លាំងណាស់" type="text" class="form-control"></div>
                <div class="col-2"><label for="">2</label><input name="add-on2" placeholder="មិនចូលចិត្តខ្លាំង" value= "មិនចូលចិត្តខ្លាំង" type="text" class="form-control"></div>
                <div class="col-2"><label for="">3</label><input name="add-on3" placeholder="មិនចូលចិត្តមធ្យម" value="មិនចូលចិត្តមធ្យម" type="text" class="form-control"></div>
                <div class="col-2"><label for="">4</label><input name="add-on4" placeholder="មិនចូលចិត្តតិចតួច"  value="មិនចូលចិត្តតិចតួច" type="text" class="form-control"></div>
                <div class="col-2"><label for="">5</label><input name="add-on5" placeholder="ធម្មតា" value="ធម្មតា" type="text" class="form-control"></div>
                <div class="col-2"><label for="">6</label><input name="add-on6" placeholder="ចូលចិត្តតិចតួច" value="ចូលចិត្តតិចតួច" type="text" class="form-control"></div>
            </div>
            <div class="row">
              <div class="col-2"><label for="">7</label><input name="add-on7" placeholder="ចូលចិត្តមធ្យម" value="ចូលចិត្តមធ្យម" type="text" class="form-control"></div>
              <div class="col-2"><label for="">8</label><input name="add-on8" placeholder="ចូលចិត្តខ្លាំង" value="ចូលចិត្តខ្លាំង"  type="text" class="form-control"></div>
              <div class="col-2"><label for="">9</label><input name="add-on9" placeholder="ចូលចិត្តខ្លាំងណាស់" value="ចូលចិត្តខ្លាំងណាស់" type="text" class="form-control"></div>


            </div>
          </div>
        </div>
      </div>

        `;
            parent_class.appendChild(new_class);
        }

    }
    else if (state == 4) {
        if (parent_class && parent_class.querySelector(".ranking-test")) {

            document.querySelector(".ranking-test").style.display = "block";
        } else {
            new_class.className = "ranking-test";
            new_class.innerHTML += `

                <div class="col-12">
                <div class="row">
                    <div class="test-title">
                    <span class="text-danger">Ranking Test Method <button class="question-mark" onclick="click_show_rank()" type="button"><i
                            class="fa-solid fa-circle-question"></i></button></span>
                    <br>
                    <label for="">ធ្វើការធៀបគំរូ ដែលមានដូចខាងក្រោម</label>
                    <br>
                    </div>
                    <div class="row mt-3">
                    <div class="col-12">
                    <label for=""></label>
                    <input type="text" class="form-control" name="test4-title" placeholder="តើគំរូមួយណាដែលខ្លាំងជាងគេ​ ?">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-12 mt-3">
                        <input type="text" name="method-state4" id="status-method-4" class="d-none" value="1">
                        <button type="button" onclick="append_parameter_ranking(1)">ថែមគំរូ</button>
                        <button type="button" onclick="append_parameter_ranking(2)">ដកគំរូ</button>
                        <span id="max-sample-ranking" class="text-danger">Sample Max</span>
                    </div>
                    <div class="col-12">
                        <div class="row">
                        <label for="">គំរូ 1  Rank1</label>
                        <div class="col-2"><input type="text" placeholder="A" name="test4-label1" class="form-control"></div>
                        <div class="col-10">
                            <select class="select-product-and-method-ranking form-control" name="test4-option1">
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col-12">
                    <div class="row">
                        <label for="">គំរូ 2 Rank2</label>
                        <div class="col-2"><input type="text" placeholder="B" name="test4-label2" class="form-control"></div>
                        <div class="col-10">
                        <select class="select-product-and-method-ranking form-control" name="test4-option2" >
                        </select>
                        </div>
                    </div>
                    </div>
                    <div class="appen-child-ranking-test"></div>
                    </div>

                </div>
                </div>

        `;
            parent_class.appendChild(new_class);
        }
    }

}

// Test RATING________________________________________________________________________________________________________________________________________________

var append_child_state_rating = 2;
function append_parameter_rating(state) {

    var append_child = document.querySelector(".appen-child-rating-test");

    if (append_child) {
        if (state == 1) {
            if (append_child_state_rating < 5) {
                if (append_child_state_rating == 2) {
                    var placeholder = "B";
                }
                else if (append_child_state_rating == 3) {
                    var placeholder = "C";
                } else if (append_child_state_rating == 4) {
                    var placeholder = "D";
                }
                (append_child_state_rating == 3) ? "C" : "D";
                var new_div = document.createElement('div');
                new_div.innerHTML = `
                    <div class="col-12" id="remove-child${append_child_state_rating}">
                        <div class="row">
                            <label for="">គំរូ ${append_child_state_rating}</label>
                            <div class="col-2"><input type="text"  name="test3-label${append_child_state_rating}" placeholder="${placeholder}" class="form-control"></div>
                            <div class="col-10">
                                <select class="select-product-and-method-rating form-control" name="test3-option${append_child_state_rating}" id="">

                                </select>
                            </div>
                        </div>
                    </div>
                `;

                append_child.appendChild(new_div);
                append_child_state_rating++;  // Increment after adding the new child
                same_test_option_rating(array_product);
            } else {
                document.querySelector("#max-sample-rating").style.display = "block";
            }
        } else {
            // Remove the last child
            var lastChild = append_child.lastElementChild;

            if (lastChild) {
                append_child.removeChild(lastChild);
                append_child_state_rating = Math.max(2, append_child_state_rating - 1);  // Ensure append_child_state doesn't go below 2
                document.querySelector("#max-sample-rating").style.display = "none";
            }
        }
    } else {
        console.log("Element with class 'appen-child' not found");
    }
}
append_child_rating = 4;
function append_rating(state) {
    var append_child = document.querySelector(".appen-child-rating");

    if (append_child) {
        if (state == 1) {
            if (append_child_rating < 6) {
                var new_div = document.createElement('div');
                new_div.innerHTML = `
                    <div class="col-12" id="remove-child${append_child_rating}">
                        <div class="row">
                            <label for="">តំលៃ ${append_child_rating}</label>
                            <div class="col-12"><input type="text"   name="value${append_child_rating}" placeholder="....." class="form-control"></div>
                        </div>
                    </div>
                `;

                append_child.appendChild(new_div);
                append_child_rating++;  // Increment after adding the new child
                same_test_option_rating(array_product);
            } else {
                document.querySelector("#max-sample-rating2").style.display = "block";
            }
        } else {
            // Remove the last child
            var lastChild = append_child.lastElementChild;

            if (lastChild) {
                append_child.removeChild(lastChild);
                append_child_rating = Math.max(2, append_child_rating - 1);  // Ensure append_child_state doesn't go below 2
                document.querySelector("#max-sample-rating2").style.display = "none";
            }
        }
    } else {
        console.log("Element with class 'appen-child' not found");
    }
}

// Ranking Test _________________________________________________________________________________________________________________________________________________________


var append_child_state_ranking = 3;
function append_parameter_ranking(state) {

    var append_child = document.querySelector(".appen-child-ranking-test");

    if (append_child) {
        if (state == 1) {
            if (append_child_state_ranking < 5) {
                if (append_child_state_ranking == 2) {
                    var placeholder = "B";
                }
                else if (append_child_state_ranking == 3) {
                    var placeholder = "C";
                } else if (append_child_state_ranking == 4) {
                    var placeholder = "D";
                }
                (append_child_state_ranking == 3) ? "C" : "D";
                var new_div = document.createElement('div');
                new_div.innerHTML = `
                    <div class="col-12" id="remove-child${append_child_state_ranking}">
                        <div class="row">
                            <label for="">គំរូ ${append_child_state_ranking} Rank ${append_child_state_ranking}</label>
                            <div class="col-2"><input type="text"  name="test4-label${append_child_state_ranking}" placeholder="${placeholder}" class="form-control"></div>
                            <div class="col-10">
                                <select class="select-product-and-method-ranking form-control" name="test4-option${append_child_state_ranking}" id="">

                                </select>
                            </div>
                        </div>
                    </div>
                `;

                append_child.appendChild(new_div);
                append_child_state_ranking++;  // Increment after adding the new child
                same_test_option_ranking(array_product);
            } else {
                document.querySelector("#max-sample-ranking").style.display = "block";
            }
        } else {
            // Remove the last child
            var lastChild = append_child.lastElementChild;

            if (lastChild) {
                append_child.removeChild(lastChild);
                append_child_state_ranking = Math.max(2, append_child_state_ranking - 1);  // Ensure append_child_state doesn't go below 2
                document.querySelector("#max-sample-ranking").style.display = "none";
            }
        }
    } else {
        console.log("Element with class 'appen-child' not found");
    }
}


// View Test___________________________________________________________________________________________________________________________________________________________________



