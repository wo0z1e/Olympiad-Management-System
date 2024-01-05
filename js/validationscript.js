function validateForm() {
    var first_name = document.getElementById("first_name").value;
    var last_name = document.getElementById("last_name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var pno = document.getElementById("pno").value;
    var termsCheckbox = document.getElementById("termsCheckbox").value;
    var gender = document.getElementById("gender").value;
    var institution = document.getElementById("institution").value;
    var division = document.getElementById("division").value;
    var eno = document.getElementById("eno").value;
    //var image = document.getElementById("image").value;

    
  
    if (first_name == "" || last_name == ""||email ==""||password ==""||institution =="" ||pno == ""||eno =="") {
      alert("All the details must be filled out");
      return false;
    }

    if(division == ""){
      alert("Please enter your division.");
      return false;
    }
  
    if(gender.checked == false){
        alert("Please select your gender.");
    return false;
    }
    
    if(pno.length < 11 ||isNaN(pno)){
      alert("Please Enter a valid Phone number .")
      return false;
    }
    if(eno.length < 11 ||isNaN(eno)){
      alert("Please Enter a valid Phone number .")
      return false;
    }
    if (password.length < 8) {
      alert("Password must be at least 8 characters long.");
      return false;
    }
    
    if (!termsCheckbox.checked) {
      alert("Please agree to the terms & conditions.");
      return false;
    }
    return true;
  }