// address checkbox
function checkFunction() {
    var checkBox = document.getElementById("check_address");
    // fecth value of residential address
    var village = document.getElementById("village").value;
    var post_office = document.getElementById("post-office").value;
    var district = document.getElementById("district").value;
    var pin = document.getElementById("pin").value;
    var state = document.getElementById("state").value;

    // fetch permanent address
    var p_village = document.getElementById("p-village");
    var p_post_office = document.getElementById("p-post-office");
    var p_district = document.getElementById("p-district");
    var p_pin = document.getElementById("p-pin");
    var p_state = document.getElementById("p-state");
    
    if (checkBox.checked == true) {
        p_village.value = village;
        p_post_office.value = post_office;
        p_district.value = district;
        p_pin.value = pin;
        p_state.value = state;
    }else {
        p_village.value = "";
        p_post_office.value = "";
        p_district.value = "";
        p_pin.value = "";
        p_state.value = "";
    }
  }

//   load passport photo
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
// load signature
var loadSign = function(event) {
    var image = document.getElementById('sign_img');
    image.src = URL.createObjectURL(event.target.files[0]);
};

// count percentage1
$(document).on("change keyup blur", "#marksobtained1", function() {
            var total = $('#totalmarks1').val();
            var marks = $('#marksobtained1').val();
            var result = marks * 100 / total;
            $('#percentage1').val(Math.round(result));
        });
// count percentage2
$(document).on("change keyup blur", "#marksobtained2", function() {
            var total = $('#totalmarks2').val();
            var marks = $('#marksobtained2').val();
            var result = marks * 100 / total;
            $('#percentage2').val(Math.round(result));
        });
// count percentage3
$(document).on("change keyup blur", "#marksobtained3", function() {
            var total = $('#totalmarks3').val();
            var marks = $('#marksobtained3').val();
            var result = marks * 100 / total;
            $('#percentage3').val(Math.round(result));
        });
// count percentage4
$(document).on("change keyup blur", "#marksobtained4", function() {
            var total = $('#totalmarks4').val();
            var marks = $('#marksobtained4').val();
            var result = marks * 100 / total;
            $('#percentage4').val(Math.round(result));
        });

// checkbox verification
$(function () {
    $('#varification_check').change(function () {
        if ($(this).is(':checked')) {
            $(".submit_btn").prop('disabled', false);
        } else {
            $(".submit_btn").children().prop('disabled', true);
        }
    });
});


