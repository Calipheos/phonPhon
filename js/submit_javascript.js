// Submit form with id function.

function submit_by_id(){
    var label = document.getElementById("label").value;
    var desc = document.getElementById("desc").value;
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){};
    xhr.open('POST','js/save.php');
    //xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send(name,desc);


}

// function submit_by_id() {
//     event.preventDefault();
//     var label = document.getElementById("label").value;
//     var desc = document.getElementById("desc").value;
//     if (validation()) // Calling validation function
//     {
//     document.getElementById("form_id").submit(); //form submission
//     alert(" label : " + label + " n desc : " + desc + " n Form Id : " + document.getElementById("form_id").getAttribute("id") + "nn Form Submitted Successfully......");
//     }
    
//     $.ajax({
//         url: "js/save.php",
//         type: "POST",
//         data: {
//             label: label,
//             desc: desc,
            			
//         },
//         cache: false,
//         success: function () {
//             alert('form was submitted');
          
//         }
//     });
//     return false;

// }
function validation() {
    var label = document.getElementById("label").value;
    var desc = document.getElementById("desc").value;
    if (label === '' || desc === '') {
        alert("Please fill all fields...!!!!!!");
        return false;
    } else {
            return true;
    }

}

// label and desc validation Function.
// function validation() {
//     var label = document.getElementById("label").value;
//     var desc = document.getElementById("desc").value;
//     var descReg = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;
//     if (label === '' || desc === '') {
//     alert("Please fill all fields...!!!!!!");
//     return false;
//     } else if (!(desc).match(descReg)) {
//     alert("Invalid desc...!!!!!!");
//     return false;
//     } else {
//     return true;
//     }
//     }