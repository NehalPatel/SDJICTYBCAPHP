<?php

	// mysql_connect("host", "username", "password");
	// mysql_select_db("databasename");

	// mysql_connect("localhost", "root", "");
	// mysql_select_db("sms");


	$connection = mysqli_connect("localhost", "root", "", "sms");

	if(! $connection ) {
      die('Could not connect: ' . mysqli_error());
   	}

   	$query = "SELECT * FROM students"; //1000

   	// die($query);
   	// echo $query;exit;

   	// $result = mysql_query($query);

   	$result = mysqli_query($connection, $query);
   	
   	// echo "<pre>";
   	// while( $row = mysqli_fetch_array($result))
   	// {
   	// 	print_r($row);
   	// }
   	// exit;  	
   	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Management System</title>
</head>
<body>

	<h1>Student Management System</h1>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>City</th>
		</tr>
		<?php  while($row = mysqli_fetch_array($result)) { ?>

		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['mobile'] ?></td>
			<td><?php echo $row['city'] ?></td>
		</tr>

		<?php  } //while end ?>

		
	</table>

</body>
</html>

<?php 

mysqli_close($connection);

?>