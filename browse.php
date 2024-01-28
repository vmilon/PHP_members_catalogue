<?php
	//include connection to mysql server
	require_once "navbar.php";
  require_once "db.php";

    //query
	$query = "SELECT * FROM contacts";
	//execute query
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  
  

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
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jquery.tablesorter.min.js"></script>
  <script type="text/javascript" src="ajax3.js"></script>
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
  <h2>CATALOG</h2>
  <p style="text-align:center;"><strong>IN THIS PAGE YOU CAN SEE OUR MEMBERS</strong></p>
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
        <th>EDIT</th>
        <th>DELETE</th>
      </tr>
    </thead>
    
    
    
    <tbody>

    <?php
	$bg = '';
	$counter=0;
	//loop inside result recordset
	while($row = mysqli_fetch_assoc($result)){
		$counter++;
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
    	<td> <?php print $counter ?></td>
        <td> <?= $fname  ?></td>
        <td> <?= $lname   ?></td>
        <td> <?= $phone     ?></td>
        <td> <?= $email   ?></td>
        <td> <?= $country      ?></td>
        <td> <?= $pic_tag ?></td>
        <td align="center">  
          <a href='editmember.php?id=<?= $id?>'>   <img src='edit.png' width='32'>   </a>
        </td>
        <td align='center'>
          <a href='deletemember.php?id=<?= $id?>'  onClick="return confirm('ARE YOU SURE YOU WANT TO DELETE THIS MEMBER?')"> <img src='x.png' width='32'> </a>
        </td>
            
   </tr>
    
      <?php		
        }
      ?>

      <br>
      <div align='center'> <a href='addmember.php'> Add new member </a></div>
        
     
    </tbody>
  


</table>

<div align='center'> <a href='addmember.php'> Add new member </a></div>


    
</body>
</html>