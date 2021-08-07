<?php 

//validation
if(trim($_POST['student_name']) == ''){
    $student_name_error = 'Student name required';            
    $is_error = true;
}

if(trim($_POST['student_email']) == ''){
    $student_email_error = 'Student email required';            
    $is_error = true;
}

// if (!preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/", trim($_POST['student_email']))) {
//     $student_email_error = "Please provide valid email format";        
//     $is_error = true;
// }

if (!filter_var(trim($_POST['student_email']), FILTER_VALIDATE_EMAIL)) {
    $student_email_error = "Please provide valid email format";        
    $is_error = true;
}

?>