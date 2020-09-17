function signUpValidate() {
  var name = document.getElementById("sname");
  var user = document.getElementById("uname");
  var institute = document.getElementById("iname");
  var department = document.getElementById("dname");
  var mail = document.getElementById("email");
  var contact = document.getElementById("cno");
  var password = document.getElementById("pass");
  if (name.value.trim() == "") {
    alert("Name is not entered");
    name.style.border = "solid 2px red";
    return false;
  } else if (user.value.trim() == "") {
    alert("User Name not entered");
    user.style.border = "solid 2px red";
    return false;
  } else if (institute.value.trim() == "") {
    alert("Institute Name not entered");
    institute.style.border = "solid 2px red";
    return false;
  } else if (department.value.trim() == "") {
    alert("Department Name not entered");
    department.style.border = "solid 2px red";
    return false;
  } else if (mail.value.trim() == "") {
    alert(" E-mail address not entered");
    mail.style.border = "solid 2px red";
    return false;
  } else if (contact.value.trim() == "") {
    alert("Contact Number not entered");
    institute.style.border = "solid 2px red";
    return false;
  } else if (password.value.trim() == "") {
    alert("Password not entered");
    password.style.border = "solid 2px red";
    return false;
  } else if (password.value.trim().length < 8) {
    alert("Please enter a stronger password");
    return false;
  } else {
    return true;
  }
}
