<?php
//include connection to MySQL server
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>

    body{
      
      background-color:rgb(238,233,218);
    
    
    }

    .banner{
      width:100%;
      height: 100px;
    
    }

    .navbar{
      width:100%;
    }

  </style>
</head>
<body>

<div class="banner">
    <img src="PB.jpg"width='100%'height='100%'object-fit='cover'>

</div>

<div class="navbar">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="browse.php" data-url="/browse.php">BROWSE</a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="about.php" id="btnAbout" data-url="/about.php">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="search.php" id="btnSearch" data-url="/search.php">SEARCH</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php" id="btnContact" data-url="/contact.php">CONTACT</a>
      </li>
      
    </ul>
  </nav>
</div>



</body>
</html>