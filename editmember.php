<?php
	require_once "navbar.php";
	require_once "db.php";
	
	$message = '';  //message to tell user about record update status
	
	//if form is submited
	if($_POST){
		
		$id        = $_POST['id'];
		$fname = $_POST['fname'];
		$lname  = $_POST['lname'];
        $phone     = $_POST['phone'];
		$email     = $_POST['email'];
		$country   = $_POST['country'];
		
		
		$query ="UPDATE contacts 
				 SET
				 fname= '$fname',
				 lname = '$lname',
                 phone    = '$phone', 
				 email    = '$email',
				 country  = '$country'
				 WHERE 
				 id = '$id'";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		
		$message  =  "RECORD UPDATED";
	}
	
	
	
	
	//if http request contains parameter named id
	if(isset($_REQUEST['id'])){
		$id = $_REQUEST['id'];
		$query = "SELECT * FROM contacts WHERE id = '$id' ";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		
		$row = mysqli_fetch_assoc($result);
		$fname = $row['fname'];
		$lname  = $row['lname'];
        $phone     = $row['phone'];
		$email     = $row['email'];
		$country   = $row['country'];
		$photo       = $row['photo'];
		$pic_tag   = '';
		if($photo){
			$pic_tag = "<img src='$photo' width='130' height='120' class='pic'>";
		}
	
		
	}
	

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> EDIT MEMBER FORM </title>
<style>
	h1{
		text-align:center;	
		color:black;
		font-family:Tahoma;
	}
	p{
		text-align:center;	
		color:black;
		font-family:Tahoma;
	}
	
	label{
		display:block;
		margin-top:20px;
		font-size:20px;
		font-family:Tahoma;
		color:black;
	}
	
	input[type="text"]{
		font-size:20px;
		font-family:Tahoma;
		padding:5px;
		color:gray;	
		width:100%;

	}
	
	#wrapper{
		width:800px;
		padding:20px;
		background-color:rgb(147,191,207);
		margin:auto;
		border:2px solid black;
	}
	
	form{
		width:60%;
		margin:auto;	
	}
    
</style>
</head>

<body>
<div id="wrapper">
  <h1> EDIT MEMBER </h1>
	<p>Inside the boxes you can see the current values and edit as you see fit.</p>
	
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    
      <label for="id">ID</label>
      <input type="text" name="id" id="id" readonly value="<?= $id ?>">
      
      <label for="firstname">Firstname</label>
      <input type="text" name="fname" id="fname" value="<?= $fname ?>">
      
      <label for="lastname">Lastname</label>
      <input type="text" name="lname" id="lname" value="<?= $lname ?>">

      <label for="phone">Phone</label>
      <input type="text" name="phone" id="phone" value="<?= $phone ?>">
      
      <label for="email">Email</label>
      <input type="text" name="email" id="email" value="<?= $email ?>">
      
      
      <label for="country">Country</label>
      <input type="text" name="country" id="country" value="<?= $country ?>">
      
 
      <br><br>
      
      <div class="photo"> <?= $pic_tag ?> </div>
	  <br>

      <input type="submit" name="submit" id="submit" value="Update">
      
    </form>

</div>
<br>
<div align="center"> <?= $message ?><br><a href='browse.php'>Back to Browse</a></div>
</body>
</html>