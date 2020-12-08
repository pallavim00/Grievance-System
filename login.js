function validate() {
  var username = document.getElementById("username");
  var password = document.getElementById("pass");
  if (username.value.trim() == "") {
    alert("Please Enter A Username");
    username.style.border = "solid 2px red";
    return false;
  } else if (password.value.trim() == "") {
    alert("Please Enter A Password");
    password.style.border = "solid 2px red";
    return false;
  } else if (password.value.trim().length < 8) {
    alert("Password too short");
    password.style.border = "solid 2px red";
    return false;
  } else {
    return true;
  }
}
