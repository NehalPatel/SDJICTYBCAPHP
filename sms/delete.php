<?php 

    require_once 'includes/db.php'; 

    $delete_sql='DELETE FROM students WHERE id=' . $_GET['id'];

    // echo $delete_sql;exit;
    
    mysqli_query($connection, $delete_sql); // PHP 7,8

    //redirect index.php
    header("location:index.php");
    exit;

?>