/********** FILM *********/

/*** FORM ADD RAP */
function hide_form_add_rap() {
    document.getElementById('form_add_rap').style.display = "none";
}

function show_form_add_rap() {
    document.getElementById('form_add_rap').style.display = "block";
}

function hide_form_edit_rap() {
    document.getElementById('form_edit_rap').style.display = "none";
}

function show_form_edit_rap() {
    document.getElementById('form_edit_rap').style.display = "block";
}

function reset_input_addrap() {
    document.getElementById("input_tenrap_addrap").value = "";
    document.getElementById("input_diachi_addrap").value = "";
}
/**** FORM AND PHONG CHIEU *****/

function hide_form_add_phongchieu() {
    document.getElementById("input_phongchieu_addphong").value = "";
    document.getElementById('form_add_phongchieu').style.display = "none";

}

function show_form_add_phongchieu() {
    document.getElementById('form_add_phongchieu').style.display = "block";
}

function hide_form_edit_phongchieu() {
    document.getElementById('form_edit_phongchieu').style.display = "none";
}

function show_form_edit_phongchieu() {
    document.getElementById('form_edit_phongchieu').style.display = "block";
}

function reset_input_addphongchieu() {
    document.getElementById("input_tenphongchieu_addphongchieu").value = "";
    document.getElementById("input_diachi_addphongchieu").value = "";
}

/**** FORM AND SUAT CHIEU *****/

function hide_form_add_suatchieu() {
    document.getElementById('form_add_suatchieu').style.display = "none";
}

function show_form_add_suatchieu() {
    document.getElementById('form_add_suatchieu').style.display = "block";
}

function hide_form_edit_suatchieu() {
    document.getElementById('form_edit_suatchieu').style.display = "none";
}

function show_form_edit_suatchieu() {
    document.getElementById('form_edit_suatchieu').style.display = "block";
}

// function reset_input_addrap() {
//     document.getElementById("input_tenphong_addphong").value = "";
//     document.getElementById("input_diachi_addrap").value = "";
// }





function submit_form_alert() {
    alert('Bạn vừa submit form');
}


function enter_to_submit(id_enter, id_submit) {
    var element = document.getElementById(this.id_enter);
    element.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            document.getElementById(this.id_submit).click();
        }
    });
}

function check(id) {
    document.getElementById(id).checked = true;
}

function uncheck(id) {
    document.getElementById(id).checked = false;
}

// ADD PHOG CHIEU
// function discard_add() {
//     var i, j;
//     for (i = 1; i <= 12; i++) {
//         for (j = 0; j <= 20; j++) {
//             document.getElementById("radio_ghe" + i + "_" + j + "").checked = false;
//         }

//     }
// }

function esc_to_close(id_enter, id_close) {
    var element = document.getElementById(id_enter);
    element.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            document.getElementById(id_close).click();
        }
    });
}