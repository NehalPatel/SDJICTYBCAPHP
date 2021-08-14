<?php 

    $is_error = false;

    $student_name='';
    $student_email='';
    $student_mobile='';
    $student_city = '';

    $student_name_error = '';
    $student_email_error = '';

    if(!empty($_POST)){

        // echo "<pre>";
        // print_r($_POST);exit;

        require_once 'includes/functions.php';        

        $student_name = senitize_input( $_POST['student_name'] );
        $student_email = senitize_input( $_POST['student_email'] );
        $student_mobile = senitize_input( $_POST['student_mobile'] );
        $student_city = senitize_input( $_POST['student_city'] );

        $gender = $_POST['gender'];
        $hobbies = implode(',', $_POST['hobbies']);
        // echo $hobbies;exit;
        $course = senitize_input( $_POST['course'] );
        $address = senitize_input( $_POST['address'] );

        require_once 'includes/validation.php';


        if( !$is_error ){
            //DB Insert
            require_once 'includes/db.php';

            $insert_sql = 'INSERT INTO students (name,email,gender,hobbies,course,address,mobile,city) VALUES ("'. $student_name .'", "'. $student_email .'", "'. $gender .'","'. $hobbies .'","'. $course .'","'. $address .'", "'. $student_mobile .'", "'. $student_city  .'")';

            // echo $insert_sql;exit;

            mysqli_query($connection, $insert_sql); // PHP 7,8

            header("location:index.php");
            exit;
        }
    }

?>

<?php include 'includes/header.php'?> 

<?php include_once 'includes/menu.php'?> 

<?php require_once('includes/heading.php') ?>

<style type="text/css">
    .req{ color: red;  }
    .err-msg{ color: red;  }
</style>
  
  <h2>Add New Student</h2>
  
<form method="post">
    <div class="form-group">
        
        <label for="student_name">Student Name <span class="req">*</span> </label>
        <input type="text" class="form-control" id="student_name" name="student_name" placeholder="Student Name" value="<?php echo isset($_POST['student_name']) ? $_POST['student_name'] : '' ?>" >
        <small class="form-text text-muted err-msg"><?php echo $student_name_error ?></small>
        
    </div>

    <div class="form-group">
        
        <label for="student_email">Student Email <span class="req">*</span></label>
        <input type="email" class="form-control" id="student_email" name="student_email" 
            placeholder="Student Email" value="<?php echo isset($_POST['student_email']) ? $_POST['student_email'] : '' ?>">
        <small class="form-text text-muted err-msg"><?php echo $student_email_error ?></small>
        
    </div>

    <div class="form-group">
        
        <label for="student_mobile">Student Mobile</label>
        <input type="text" class="form-control" id="student_mobile" name="student_mobile" placeholder="Student Mobile" value="<?php echo isset($_POST['student_mobile']) ? $_POST['student_mobile'] : '' ?>">
        
    </div>

    <div class="form-group">
        
        <label for="student_city">Student City</label>
        <input type="text" class="form-control" id="student_city" name="student_city" placeholder="Student City" value="<?php echo isset($_POST['student_city']) ? $_POST['student_city'] : '' ?>">
        
    </div>


    <div class="radio">
        <label for="gender">Gender</label>

        <label><input type="radio" name="gender" value="1"> Male</label>
        <label><input type="radio" name="gender" value="0"> Female</label>        
    </div>

    <div class="form-group">        
        <label for="gender">Hobbies</label>
        <label><input type="checkbox" name="hobbies[]" value="sports"> Sports</label>
        <label><input type="checkbox" name="hobbies[]" value="reading"> Reading</label>
        <label><input type="checkbox" name="hobbies[]" value="writing"> Writing</label>
    </div>

    <div class="form-group">        
        <label for="gender">Course</label>
        <select name="course">
            <option value="bca">BCA</option>
            <option value="bcom">BCom</option>
            <option value="bba">BBA</option>
        </select>
    </div>

     <div class="form-group">        
        <label for="gender">Address</label>
        <textarea class="form-control" rows="3" name="address"></textarea>
    </div>


    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php include_once('includes/footer.php'); ?>