<?php

session_start();

if((isset($_SESSION['username']) && $_SESSION['username'] != ""))
{
    header('location:introduction.php');
}

if(isset($_SESSION['msg']) && $_SESSION['msg'] != "")
{
	echo "<p class='".$_SESSION['msgtype']." msg'>".$_SESSION['msg']."</p>";
	unset($_SESSION['msgtype']);
	unset($_SESSION['msg']);
}

?>

<html>
  <title>login page</title>
  <head>
    <link rel="stylesheet" type="text/css" href="css1.css" />
    <script src="login.js"></script>
  </head>

  <body text="white">
    <div class="div3">
      <h1>
        <b
          ><i><u>Login..!</u></i></b
        >
      </h1>
      <br />
      <form onsubmit="return validate()" method="post" action="connect3.php">
        <table id="tab1">
          <tr>
            <th>
              <label for="Uname"><i>Username :</i></label>
            </th>
            <td>
              <input
                type="text"
                id="username"
                placeholder="Username"
                name="username"
              />
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th>
              <label for="p-word"><i>Password:</i></label>
            </th>
            <td>
              <input
                type="password"
                id="pass"
                placeholder="Password"
                name="password"
              />
            </td>
          </tr>
        </table>
        <br />
        <input type="checkbox" onclick="myfunction()" />Show password
        <script>
          function myfunction() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }
        </script>
        <br /><br />
        <button class="button" name="submit">Login</button>
      </form>
      <br />
    </div>
  </body>
</html>
