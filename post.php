<?php 

include('header.php'); 
if(isset($_SESSION['msg']) && $_SESSION['msg'] != "")
{
	echo "<p class=".$_SESSION['msgtype'].">".$_SESSION['msg']."</p>";
	unset($_SESSION['msgtype']);
	unset($_SESSION['msg']);
}
?>
<br>
  <br>
  <div class="div3">
  <h1><b><i  class="italic"><i style="color: black" class="fa fa-upload" aria-hidden="true"></i> Upload your query</i></b></h1>
  <br><hr><br>

    <form method="POST" action="query_post.php">
    <table id="tab3">
    <tr>
	  <th><label>Select Level:</label></th>
	  <td><input type="radio" name="level" value="department">  Department 
	  <input type="radio" name="level" value="college" style="margin-left:2.5em">  College</td>
	  </tr>
	  <tr>
	  <th><label for="queryt">Query Title:</label></th>
	  <td><input type="text" id="query_title" placeholder="Subject/title" name="query_title"></td>
	  </tr>
	  <tr>
	  <th><label for="queryd">Description:</label></th>
	  <td><textarea rows="5" cols="30" name="description" placeholder="Describe your query here."></textarea></td>
	  </tr>
	</table>
	<button class="button2" name="submit_btn" value="post_form">Submit</button>
    </form>
    <br>
    <br>
</div>
</form>
  </body>
</html>
