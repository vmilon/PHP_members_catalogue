<?php
	require_once "navbar.php";
	require_once "db.php";
    require_once "func.php";
	
	$message   = '';  //message to tell user about record update status
	$id='';
    $fname = '';
	$lname  = '';
    $phone     = '';
	$email     = '';
	$country   = '';
		
	//if form is submited
	if($_POST){
        
        $id = $_POST['id'];
		$fname = $_POST['fname'];
		$lname  = $_POST['lname'];
        $phone     = $_POST['phone'];
		$email     = $_POST['email'];
		$country   = $_POST['country'];
		
		
		
		$query ="INSERT INTO  contacts 
					(id, fname, lname, phone, email, country)
					VALUES
					('$id', '$fname', '$lname', '$phone', '$email', '$country')";
					
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$message  =  "RECORD ADDED SUCCESFULLY!";

        if(isset($_FILES['pic']))   {
			$img_path="./photos/";
			$posted='pic'; 
			if ($_FILES[$posted]['name']){	
				//the path  that function 'upload' returns after upload-move-rename procedure		
				$uploaded_file=upload($posted, $img_path); 
				if ($uploaded_file){ 
					$query="UPDATE contacts SET photo='$uploaded_file' WHERE contacts.email='$email' "; 
					mysqli_query($conn, $query) or die($query.":".mysqli_error($conn));		
				}
				else {
					$message  .= " - USER IMAGE FAILED TO UPLOAD.";
				}
			}		
		}
		
	
	} //if($_POST)
	
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
	h1{
		text-align:center;	
		color:white;
		font-family:Tahoma;
	}
	
	label{
		display:block;
		margin-top:20px;
		font-size:20px;
		font-family:Tahoma;
		color:black;
		background-color:rgb(238,233,218);
	}
	
	input[type="text"]{
		font-size:20px;
		font-family:Tahoma;
		padding:5px;
		color:gray;	
		width:100%;
		
	}
	
	#wrapper{
		width:500px;
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
  <h1> ADD NEW MEMBER FORM </h1>
	
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

      <label for="id">ID:</label>
      <input type="text" name="id" id="id" value="<?= $id ?>">
      
      <label for="firstname">Firstname:</label>
      <input type="text" name="fname" id="fname" value="<?= $fname ?>">
      
      <label for="lastname">Lastname:</label>
      <input type="text" name="lname" id="lname" value="<?= $lname ?>">

      <label for="phone">Phone:</label>
      <input type="text" name="phone" id="phone" value="<?= $phone ?>">
      
      <label for="email">Email:</label>
      <input type="text" name="email" id="email" value="<?= $email ?>">
         
      <label for="country">Country:</label>
      <input type="text" name="country" id="country" value="<?= $country ?>">
      
 
      <br><br>
	  <label for="pic">Choose a profile picture:</label>
      <input name="pic" id="pic" type="file" accept="image/*" onchange="loadFile(event)">
		<br>
		<div id="preview"></div>
		<img id="output" width="100">
		<br><br>

      
	  <br>

      <input type="submit" name="submit" id="submit" value="Add member">
      
    </form>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        
    </form>

</div>
<br><br>
<div align="center"> <?= $message ?><br><a href='browse.php'>Back to Browse</a></div></div>


<script>
  var loadFile = function(event) {
	 document.getElementById('preview').innerHTML = "Photo preview";
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>

</body>
</html>