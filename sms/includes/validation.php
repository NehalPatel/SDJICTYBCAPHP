<?php 

//validation
if($student_name == ''){
    $student_name_error = 'Student name required';            
    $is_error = true;
}

if($student_email == ''){
    $student_email_error = 'Student email required';            
    $is_error = true;
}elseif (!filter_var($student_email, FILTER_VALIDATE_EMAIL)) {
    $student_email_error = "Please provide valid email format";        
    $is_error = true;
}

?>