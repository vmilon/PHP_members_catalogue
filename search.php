<?php
  session_start();
	//include connection to mysql server
	require_once "navbar.php";
	require_once "db.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>

    body{
      
      background-color:rgb(238,233,218);
    
    
    }

    .container{
      background-color:rgb(147,191,207);
      border:2px solid black;
    }

  </style>
</head>
<body>

<div class="container">
  
  <p style="text-align:center;"><strong>IN THIS PAGE YOU CAN SEARCH FOR SPECIFIC MEMBERS BASED ON THE BELOW CRITERIA<br>(There is no need to fill all of the fields)</strong></p>
  <form action="results.php" method="post">
    <div class="form-group">
      <label for="usr">ID</label>
      <input type="text" class="form-control" id="id" name="searchid">
    </div>
    <div class="form-group">
      <label for="pwd">LASTNAME</label>
      <input type="text" class="form-control" id="lname" name="searchlname">
    </div>
	<div class="form-group">
      <label for="pwd">COUNTRY</label>
      <input type="text" class="form-control" id="country" name="searchcountry">
    </div>
    <button type="submit" class="btn btn-primary">SEARCH</button>
  </form>
</div>

</body>
</html>