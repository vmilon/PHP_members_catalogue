<?php
	//include connection to mysql server
	require_once "navbar.php";

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



.float-container {
    border: 3px solid gray;
    padding: 20px;
    background-color:rgb(147,191,207);
}

.float-child {
    width: 50%;
    float: left;
    padding: 20px;
    
    background-color:rgb(147,191,207);
}  

.contactinfo{
    margin:20px;
    padding: 20px;
    background-color:rgb(147,191,207);
}
.list-group-item{
    background-color:rgb(189, 205, 214);
}
.row{align-items:center ;}


    </style>
</head>
<body>


<div class="float-container">
    <p style='text-align:center;'><strong>IN THIS PAGE YOU CAN FIND OUR CONTACT INFO</strong></p>
    <div class="float-child">
        <p>SEND US A MESSAGE</p>
        <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
            <div class="row">
                <label class="required" for="name">Your name:</label><br />
                <input id="name" class="input" name="name" type="text" value="" size="50" /><br />
                <span id="name_validation" class="error_message"></span>
            </div>
            <div class="row">
                <label class="required" for="email">Your email:</label><br />
                <input id="email" class="input" name="email" type="text" value="" size="50" /><br />
                <span id="email_validation" class="error_message"></span>
            </div>
            <div class="row">
                <label class="required" for="message">Your message:</label><br />
                <textarea id="message" class="input" name="message" rows="6" cols="50"></textarea><br />
                <span id="message_validation" class="error_message"></span>
                
            </div>
                
                <input id="submit_button" type="submit" value="Send email" />
        </form>
    </div>

    <div class="float-child">

        <p>YOU CAN FIND US AT:<p>
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="350" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=ifigenias%2011,kallithea&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

                </iframe>
                <a href="https://123movies-to.org"></a><br>
                <style>.mapouter{position:relative;text-align:right;height:250px;width:350px;}</style>
                <a href="https://www.embedgooglemap.net">google map generator</a>
                <style>.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:350px;}</style>
            </div>
        </div>

    </div>
    <br>
    <br>


    <div class="contactinfo">
        <p style='text-align:center;'>MORE CONTACT INFORMATION</p>            
        <ul class="list-group list-group-flush">
            <li class="list-group-item" style='text-align:center;'><strong>PHONE 1:</strong> 2102657894</li>
            <li class="list-group-item" style='text-align:center;'><strong>PHONE 2:</strong> 6987495637</li>
            <li class="list-group-item" style='text-align:center;'><strong>FAX:</strong> 2102687545 </li>
        </ul>
    </div>



</div>
    



</body>
</html>
