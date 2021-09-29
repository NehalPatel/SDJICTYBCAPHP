<?php

    require_once 'includes/db.php';

    $is_error = false;

    $student_name_error = '';
    $student_email_error = '';

    if(!empty($_POST)){

        $target_file = "uploads/" . $_FILES["avatar"]["name"];
        move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);

        require_once 'includes/functions.php';

        $student_id = senitize_input( $_POST['student_id'] );
        $student_name = senitize_input( $_POST['student_name'] );
        $student_email = senitize_input( $_POST['student_email'] );
        $student_mobile = senitize_input( $_POST['student_mobile'] );
        $student_city = senitize_input( $_POST['student_city'] );

        $gender = senitize_input($_POST['gender']);
        $hobbies = empty( $_POST['hobbies']) ? '' : implode(',', $_POST['hobbies']);
        // echo $hobbies;exit;
        $course = senitize_input( $_POST['course'] );
        $address = senitize_input( $_POST['address'] );

        require_once 'includes/validation.php';


        if( !$is_error ){

            $update_sql = 'UPDATE `students` SET `name` = "'. $student_name .'", `email` = "'. $student_email .'", `gender` = "'. $gender .'", `hobbies` = "'. $hobbies .'", `course` = "'. $course .'", `address` = "'. $address .'",`mobile` = "'. $student_mobile .'",`city` = "'. $student_city .'",`avatar` = "'. $target_file .'" WHERE `students`.`id` = '. $student_id;

            // echo $update_sql;exit;

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

?>

<style type="text/css">
    .req{ color: red;  }
    .err-msg{ color: red;  }
</style>

  <h2>Add New Student</h2>

<form method="post" enctype="multipart/form-data">

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

    <p><b>Gender</b></p>
    <div class="radio">
      <label><input type="radio" name="gender" value="1" <?php echo $row['gender']==1?"checked":''; ?>>Male</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="gender" value="0" <?php echo $row['gender']==0?"checked":''; ?>>Female</label>
    </div>

    <div class="form-group">

        <?php
            $hobbies = $row['hobbies'];  //reading,writing,sports
            $hobbies = explode(",", $hobbies);
        ?>

        <label for="gender">Hobbies</label>
        <label><input type="checkbox" name="hobbies[]" value="sports" <?php echo in_array('sports', $hobbies)?'checked':''; ?>> Sports</label>
        <label><input type="checkbox" name="hobbies[]" value="reading" <?php echo in_array('reading', $hobbies)?'checked':''; ?>> Reading</label>
        <label><input type="checkbox" name="hobbies[]" value="writing" <?php echo in_array('writing', $hobbies)?'checked':''; ?>> Writing</label>
    </div>

    <div class="form-group">
        <label for="gender">Course</label>
        <select name="course">
            <option value="bca" <?php echo $row['course']=='bca'?'selected':''; ?>>BCA</option>
            <option value="bcom" <?php echo $row['course']=='bcom'?'selected':''; ?>>BCom</option>
            <option value="bba" <?php echo $row['course']=='bba'?'selected':''; ?>>BBA</option>
        </select>
    </div>

     <div class="form-group">
        <label for="gender">Address</label>
        <textarea class="form-control" rows="3" name="address"><?php echo $row['address']; ?></textarea>
    </div>

    <img src="/SDJICTYBCAPHP/sms/<?php echo $row['avatar']; ?>" height="100" width="100">
    <br>

    <div class="form-group">
        <label for="avatar">Upload your profile Pic</label>
        <input type="file" class="form-control-file" id="avatar" name="avatar">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php include_once('includes/footer.php'); ?>