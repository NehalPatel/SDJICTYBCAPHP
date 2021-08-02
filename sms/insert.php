  <?php include 'includes/header.php'?> 
  
  <?php include_once 'includes/menu.php'?> 

  <?php require_once('includes/heading.php') ?>

  
  <h2>Add New Student</h2>

<form method="post" action="save.php">
    <div class="form-group">
        
        <label for="student_name">Student Name</label>
        <input type="text" class="form-control" id="student_name" name="student_name" placeholder="Student Name">
        
    </div>

    <div class="form-group">
        
        <label for="student_email">Student Email</label>
        <input type="email" class="form-control" id="student_email" name="student_email" placeholder="Student Email">
        
    </div>

    <div class="form-group">
        
        <label for="student_mobile">Student Mobile</label>
        <input type="text" class="form-control" id="student_mobile" name="student_mobile" placeholder="Student Mobile">
        
    </div>

    <div class="form-group">
        
        <label for="student_city">Student City</label>
        <input type="text" class="form-control" id="student_city" name="student_city" placeholder="Student City">
        
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php include_once('includes/footer.php'); ?>