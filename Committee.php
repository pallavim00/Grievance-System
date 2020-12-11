<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css1.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <script src="committee.js"></script>
  </head>

  <body text="white">
  <?php
    if(isset($_SESSION['msg']) && $_SESSION['msg'] != "")
    {
	      echo "<p class='".$_SESSION['msgtype']." msg'>".$_SESSION['msg']."</p>";
	      unset($_SESSION['msgtype']);
	      unset($_SESSION['msg']);
    }
  ?>
    <div class="div3">
      <h1>
        <u><i>Committee Details..!</i></u>
      </h1>
      <br /><br />
      <form onsubmit="return committeeValidate()" method="post" action="committee_action.php">
        <table id="tab1">
          <tr>
            <th>
              <label for="UName"><i>UserName:</i></label>
            </th>
            <td>
              <input type="text" id="name" placeholder="Name" name="username" />
            </td>
          </tr>
          <tr>
            <th>
              <label for="iname"><i>Institute Name:</i></label>
            </th>
            <td>
                <select id="iname" name="institutename">
                <option value="">Select Institute Name</option>
                <?php 
                    $sql = "select c.* from colleges c";  
                    $result = mysqli_query($con, $sql);  
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                    {
                    ?>
                          <option value="<?php echo $row['id_college']; ?>"><?php echo $row['name']; ?></option>
                    <?php
                    }
                  ?>
                </select>
            </td>
          </tr>
          <tr>
            <th>
              <label for="e-id"><i>Email-ID:</i></label>
            </th>
            <td>
              <input type="text" id="n" placeholder="email-id" name="emailid" />
            </td>
          </tr>
          <tr>
            <th>
              <label for="p-word"><i>Password:</i></label>
            </th>
            <td>
              <input type="password" id="pass" placeholder="password" name="password" />
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
        <button class="button" href="">Submit</button>
      </form>
      <br />
      <br />
    </div>
  </body>
</html>
