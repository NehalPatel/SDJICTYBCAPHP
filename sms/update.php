<?php 

    require_once 'includes/db.php'; 

    $query = 'SELECT * FROM students where id=' . $_GET['id'];

    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    include 'includes/header.php';

    include_once 'includes/menu.php';

    require_once('includes/heading.php');

?>

  
  <h2>Add New Student</h2>

<form method="post" action="store.php">

    <input type="hidden" name="student_id" value="<?php echo $row['id'] ?>" >

    <div class="form-group">
        
        <label for="student_name">Student Name</label>
        <input type="text" class="form-control" id="student_name" name="student_name" placeholder="Student Name" value="<?php echo $row['name'] ?>" >
        
    </div>

    <div class="form-group">
        
        <label for="student_email">Student Email</label>
        <input type="email" class="form-control" id="student_email" name="student_email" placeholder="Student Email"  value="<?php echo $row['email'] ?>">
        
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