<?php
session_start();
include('connection.php');
?>
<html>
    <head>
        <title>SGSS SignUp</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css1.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
        <script src="signup.js"></script>
    </head>
    <body>
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
                <u><i>Sign-up..!</i></u>
            </h1>
            <br />
            <form onsubmit="return signUpValidate()" method="post" action="signup_action.php">
                <table id="tab1">
                    <tr>
                        <th>
                            <label for="sname"><i>Student Name:</i></label>
                        </th>
                        <td>
                            <input type="text" id="sname" placeholder=" Your Full Name" name="studentname" />
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="U-name"><i>UserName:</i></label>
                        </th>
                        <td>
                            <input type="text" id="uname" placeholder=" Your Full Name" name="username" />
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="Iname"><i>Institute Name:</i></label>
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
                            <label for="DName"><i>Department Name:</i></label>
                        </th>
                        <td>
                            <input type="text" id="dname" placeholder=" Your Department name" name="departmentname" />
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="e-id"><i>Email-ID:</i></label>
                        </th>
                        <td>
                            <input type="text" id="email" placeholder="Your working Email-id" name="emailid" />
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="Cno"><i>Contact No:</i></label>
                        </th>
                        <td>
                            <input type="text" id="cno" placeholder="Your working Contact No." name="contactno" />
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="p-word"><i>Password:</i></label>
                        </th>
                        <td>
                            <input type="password" id="pass" placeholder="Strong Password" name="password" />
                        </td>
                    </tr>
                </table>
                <input type="checkbox" onclick="myfunction()" /> Show password </input>
                <script>
                    function mouseoverPass(obj) 
                    {
                    	if( obj.type == "password")
                        {
                    	    var obj = document.getElementById('pass');
                    	    return obj.type = "text";
                        }    
                    	else
                        {
                    	    return obj.type = "password";
                        }    
                    }
                    function myfunction() 
                    {
                        var x = document.getElementById("pass");
                        if (x.type === "password")
                        {
                            return x.type = "text";
                        } 
                        else 
                        {
                            return x.type = "password";
                        }
                    }
                </script>
                <br />
                <br />
                <button class="button">Submit</button>
            </form>
        </div>
    </body>
</html>
