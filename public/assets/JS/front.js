
var same_state = 1;
var diff_state = 1;
var rating_raw = 1;
var ranking_raw_state = 1;

window.addEventListener("load", function () {
    btn_load =  document.querySelector(".blur");
    btn_load.style.display = "block";

});

window.addEventListener("load", function () {
    btn_load =  document.querySelector(".blur");
    btn_load.style.animation = "fade-out 1s forwards";
});


function same_raw(){
    if(same_state == 0){
       document.querySelector(".same-raw").style.display = "none";
       document.querySelector("#btn-hide-same").innerHTML = '+';
       same_state += 1;
    }else{
        document.querySelector(".same-raw").style.display = "block";
        document.querySelector("#btn-hide-same").innerHTML = '-';
        same_state = 0;
    }
}
function diff_raw(){
    if(diff_state == 0){
       document.querySelector(".diff-raw").style.display = "none";
       document.querySelector("#btn-hide-diff").innerHTML = '+';
       diff_state += 1;
    }else{
        document.querySelector(".diff-raw").style.display = "block";
        document.querySelector("#btn-hide-diff").innerHTML = '-';
        diff_state = 0;
    }
}

function ratingraw(){

    if(rating_raw == 0){
       document.querySelector(".raw-rating").style.display = "none";
       document.querySelector("#btn-rating-raw").innerHTML = '+';
       rating_raw += 1;
    }else{
        document.querySelector(".raw-rating").style.display = "block";
        document.querySelector("#btn-rating-raw").innerHTML = '-';
        rating_raw = 0;
    }
}


function ranking_raw(){

    if(ranking_raw_state == 0){
       document.querySelector(".raw-ranking").style.display = "none";
       document.querySelector("#btn-ranking-raw").innerHTML = '+';
       ranking_raw_state += 1;
    }else{
        document.querySelector(".raw-ranking").style.display = "block";
        document.querySelector("#btn-ranking-raw").innerHTML = '-';
        ranking_raw_state = 0;
    }
}

// Alert Delete Bar

    var btn_reset = document.querySelectorAll(".btn-reset");
    btn_reset.forEach(function (button) {
       
        button.addEventListener("click", function () {
     
            var itemId = button.parentElement.querySelector("input").value;
      
            document.getElementById("id-delete-box").value = itemId;
            document.querySelector(".alert-confirm").style.display = "block";
            
        });
    });

    function hide_alert(){
        document.querySelector(".alert-confirm").style.display = "none";
    }