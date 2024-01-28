<?php
	//include connection file to mysql server
	require_once "db.php";
	
	//if http request contains parameter named id
	if(isset($_REQUEST['id'])){
		$id = $_REQUEST['id'];
		$query = "DELETE FROM contacts WHERE id ='$id' ";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	}
	
	header("location:browse.php");
?>