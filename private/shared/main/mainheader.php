<!DOCTYPE html>
<html >
  <head>
    <?php if(!isset($page_title)){$page_title = "";}?>
    <title><?php echo $page_title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  </head>
  	 <div class="container">
  	 	<h2 align="center">Blood Pressure Diagonostics </h2>
  	 <nav class="navbar">
    							
    								<ul class ="nav ml-auto">
    									<li><a href="<?php echo urlFor('index.php'); ?>">Home</a></li>
    									&nbsp; &nbsp;
    									<li><a href="<?php  echo urlFor('/about.php');  ?>">About Us</a></li>

    									&nbsp; &nbsp;
                      <li><a href="<?php echo urlFor('patient/login.php');  ?>">Book Appointment</a></li>

    								
                 </ul>
             
    			</nav>

</div>