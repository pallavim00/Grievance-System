<?php
session_start();
$user = $_POST['username'];
$pwd = $_POST['password'];

if ($username && $password)
{
   $conn = mysql_connect("localhost","root","","grievance-system");
   mysql_select_db("grievance-system") or die("couldn't find database");
   $query = mysql_query("select * from users where username ='$username'");
   $numrows = mysql_num_rows($query);

   if($numrows!=0)
   {
      while($row = mysql_fetch_assoc($query))
      {
         $dbusername = $row['username'];
         $dbpassword = $row['password'];
      }
      if($username == $dbusername && $password == $dbpassword)
      {
         echo 'Login successful';
         $_SESSION['username']= $dbusername;
      }
      else
      {
         echo 'Incorrect Password';
      }
   }   
   else
   {
      die("That username doesnt exist");
   }
}   
else
{
   die("Please enter username and password");
}
mysql_close($conn);
?>