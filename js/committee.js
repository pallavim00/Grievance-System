function committeeValidate() {
  var name = document.getElementById("name");
  var institute = document.getElementById("iname");
  var mail = document.getElementById("n");
  var password = document.getElementById("pass");
  if (name.value.trim() == "") {
    alert("Please Enter A Name");
    name.style.border = "solid 2px red";
    return false;
  } else if (institute.value.trim() == "") {
    alert("Please Enter Name of your Institute");
    institute.style.border = "solid 2px red";
    return false;
  } else if (mail.value.trim() == "") {
    alert("Please Enter your E-mail Address");
    mail.style.border = "solid 2px red";
    return false;
  } else if (password.value.trim() == "") {
    alert("Please Enter A Password");
    institute.style.border = "solid 2px red";
    return false;
  } else if (password.value.trim().length < 8) {
    alert("Password too Small");
    password.style.border = "solid 2px red";
    return false;
  } else {
    return true;
  }
}
