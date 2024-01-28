<?php
session_start();
require_once "navbar.php";
$searchid = $_POST['searchid'];
$searchlname = $_POST['searchlname'];
$searchcountry = $_POST['searchcountry'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "catalogue";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

//IF QUERY HAS 3 CRITERIA
if($_POST['searchid'] && $_POST['searchlname'] && $_POST['searchcountry']){
$sql = "SELECT * FROM contacts WHERE lname LIKE '%$searchlname%' OR id=$searchid OR country LIKE '%$searchcountry%' ";
}
//2 CRITERIA
elseif($_POST['searchid'] && $_POST['searchlname']){
    $sql = "SELECT * FROM contacts WHERE lname LIKE '%$searchlname%' OR id=$searchid";
}
elseif($_POST['searchid'] && $_POST['searchcountry']){
    $sql = "SELECT * FROM contacts WHERE id=$searchid OR country LIKE '%$searchcountry%'";
}
elseif($_POST['searchlname'] && $_POST['searchcountry']){
    $sql = "SELECT * FROM contacts WHERE lname LIKE '%$searchlname%' OR country LIKE '%$searchcountry%'";
}
//ONLY 1 CRITERIA
elseif($_POST['searchid']){
    $sql = "SELECT * FROM contacts WHERE id=$searchid";
}
elseif($_POST['searchlname']){
    $sql = "SELECT * FROM contacts WHERE lname LIKE '%$searchlname%'";
}
elseif($_POST['searchcountry']){
    $sql = "SELECT * FROM contacts WHERE country LIKE '%$searchcountry%'";
}
//IF NO CRITERIA SHOW ALL USERS
else{
    $sql = "SELECT * FROM contacts";
}






$result = $conn->query($sql);

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
      text-align: center;
    
    
    }
    h2{
        text-align:center;
    }

    .pic{
		border-radius:50px;
		box-shadow:#666 2px 2px 10px;
	
    }

    .container{
      background-color:rgb(147,191,207);
      border:2px solid black;
    }
    

  </style>
</head>
<body>

<div class="container">
  <h2 style="text-align:center;">SEARCH RESULTS</h2>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>PHONE</th>
        <th>EMAIL</th>
        <th>COUNTRY</th>
        <th>PHOTO</th>
      </tr>
    </thead>
    
    
    
    <tbody>

    <?php
	//loop inside result recordset
	while($row = mysqli_fetch_assoc($result)){
		$id        = $row['id'];
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
		
?>		
	<tr class="<?= $bg ?>">
        <td> <?= $id  ?></td>
        <td> <?= $fname  ?></td>
        <td> <?= $lname   ?></td>
        <td> <?= $phone     ?></td>
        <td> <?= $email   ?></td>
        <td> <?= $country      ?></td>
        <td> <?= $pic_tag ?></td>
    </tr>
    
<?php		
	}
?>
     
    </tbody>
  


</table>

<a href="search.php">Back to Search</a>


    
</body>

</html>