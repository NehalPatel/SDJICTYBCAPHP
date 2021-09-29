<?php 
$connection = mysqli_connect("localhost", "root", "root", "sms");

	if(! $connection ) {
      die('Could not connect: ' . mysqli_error());
   	}

 ?>