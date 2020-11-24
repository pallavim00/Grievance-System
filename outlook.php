
<?php include('header.php'); 
include('connection.php');
if(isset($_SESSION['msg']) && $_SESSION['msg'] != "")
{
	echo "<p class=".$_SESSION['msgtype'].">".$_SESSION['msg']."</p>";
	unset($_SESSION['msgtype']);
	unset($_SESSION['msg']);
}
	?>
	<br>
	<br>
	<?php 
	
	$sql = "select count(qu.id_upvote) as total_query_votes ,qp.* from query_post qp
	left join query_upvotes qu on qu.id_query = qp.id_query
	where qp.id_college = ".$_SESSION['id_college']."
	group by qp.id_query";  
      
	$result = mysqli_query($con, $sql);  
	
	
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
	?>
		<div class="div3">
			<table id="tab2">

				<tr>
					<th>Level:</th>
					<td><?php echo $row['level']; ?></td>
				</tr>
				<tr>
					<th>Title:</th>
					<td><?php echo $row['query_title']; ?></td>
				</tr>
				<tr>
					<th>Description:</th>
					<td><?php echo $row['description']; ?></td>
				</tr>
			</table>
		
			<i style="color: black" onclick="voteQuery(<?php echo $row['id_query']; ?>)" class="fa fa-thumbs-o-up"> <?php echo $row['total_query_votes']; ?> Upvotes</i>
			
		</div>
	<?php  } ?>
</form>
<form method="POST" action="vote_query.php" id="submitVote">
	<input  type="hidden" name="id_query" id="id_query" value="">
	<input  type="hidden" name="formAction"  value="submit_vote">
</form>
<script>
	function voteQuery(id_query) {
		document.getElementById("id_query").value = id_query;
		document.getElementById("submitVote").submit();
	}
</script>
</body>
</html>