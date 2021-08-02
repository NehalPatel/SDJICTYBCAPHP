<?php


    require_once 'includes/db.php';

 // print_r($_POST);

// $insert_sql = 'INSERT INTO students (name,email,mobile,city) VALUES ("Nehal Patel", "nehal.sdjic@gmail.com", "987654310", "Surat")';

 $insert_sql = 'INSERT INTO students (name,email,mobile,city) VALUES ("'. $_POST['student_name'] .'", "'. $_POST['student_email'] .'", "'. $_POST['student_mobile'] .'", "'. $_POST['student_city']  .'")';

 // echo $insert_sql;


// mysql_query($insert_sql); //PHP 5.x

mysqli_query($connection, $insert_sql); // PHP 7,8

//redirect index.php
header("location:index.php");
exit;
?>