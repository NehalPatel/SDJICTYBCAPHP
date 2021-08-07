<?php 

    require_once 'includes/db.php';

    $is_error = false;

    $student_name_error = '';
    $student_email_error = '';

    if(!empty($_POST)){

        require_once 'includes/validation.php';


        if( !$is_error ){
            
            $update_sql = 'UPDATE `students` SET `name` = "'. $_POST['student_name'] .'", `email` = "'. $_POST['student_email'] .'",`mobile` = "'. $_POST['student_mobile'] .'",`city` = "'. $_POST['student_city'] .'" WHERE `students`.`id` = '. $_POST['student_id'];

            mysqli_query($connection, $update_sql); // PHP 7,8

            //redirect index.php
            header("location:index.php");
            exit;
        }
    }

    $query = 'SELECT * FROM students where id=' . $_GET['id'];

    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    include 'includes/header.php';

    include_once 'includes/menu.php';

    require_once('includes/heading.php');

?>

<style type="text/css">
    .req{ color: red;  }
    .err-msg{ color: red;  }
</style>
  
  <h2>Add New Student</h2>

<form method="post">

    <input type="hidden" name="student_id" value="<?php echo $row['id'] ?>" >

    <div class="form-group">
        
        <label for="student_name">Student Name</label>
        <input type="text" class="form-control" id="student_name" name="student_name" placeholder="Student Name" value="<?php echo $row['name'] ?>" >
        <small class="form-text text-muted err-msg"><?php echo $student_name_error ?></small>
        
    </div>

    <div class="form-group">
        
        <label for="student_email">Student Email</label>
        <input type="email" class="form-control" id="student_email" name="student_email" placeholder="Student Email"  value="<?php echo $row['email'] ?>">
        <small class="form-text text-muted err-msg"><?php echo $student_email_error ?></small>
        
    </div>

    <div class="form-group">
        
        <label for="student_mobile">Student Mobile</label>
        <input type="text" class="form-control" id="student_mobile" name="student_mobile" placeholder="Student Mobile"  value="<?php echo $row['mobile'] ?>">
        
    </div>

    <div class="form-group">
        
        <label for="student_city">Student City</label>
        <input type="text" class="form-control" id="student_city" name="student_city" placeholder="Student City"  value="<?php echo $row['city'] ?>">
        
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php include_once('includes/footer.php'); ?>