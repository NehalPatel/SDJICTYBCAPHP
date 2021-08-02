<?php

    // print_r($_POST);exit;

    require_once 'includes/db.php';


    // UPDATE `students` SET `name` = 'Devashya N Patel' WHERE `students`.`id` = 5

    $update_sql = 'UPDATE `students` SET `name` = "'. $_POST['student_name'] .'", `email` = "'. $_POST['student_email'] .'",`mobile` = "'. $_POST['student_mobile'] .'",`city` = "'. $_POST['student_city'] .'" WHERE `students`.`id` = '. $_POST['student_id'];

    // echo $update_sql;exit;
 
    mysqli_query($connection, $update_sql); // PHP 7,8

//redirect index.php
header("location:index.php");
exit;
?>