<?php

	session_start();

	if(!isset($_SESSION['userid'])){
		header('location:login.php');
		exit;
	}

	require_once 'includes/db.php';

   	$query = "SELECT * FROM students"; //1000

   	$result = mysqli_query($connection, $query);

?>

	<?php include 'includes/header.php'?>

    <?php include_once 'includes/menu.php'?>

    <h1>Student Management System</h1>

    <a href="insert.php" class="btn btn-primary">Insert New Student</a>

    <br>

	<table border="1" class="table">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>City</th>
			<th>Actions</th>
		</tr>
		<?php  while($row = mysqli_fetch_array($result)) { ?>

		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['mobile'] ?></td>
			<td><?php echo $row['city'] ?></td>
			<td>
				<a href="update.php?id=<?php echo $row['id'] ?>">Edit</a> |
				<a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
			</td>
		</tr>

		<?php  } //while end ?>


	</table>

<?php include_once('includes/footer.php'); ?>