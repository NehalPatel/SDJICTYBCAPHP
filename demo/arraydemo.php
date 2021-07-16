<?php 

//index array
$cars = array("Volvo", "BMW", "Toyota");
$cars = ['Volvo', 'BMW', 'Toyota'];

echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";

$cars[] = 'Hyundai';

print_r($cars);


//associative array
$students = [];
$students['nehal'] = ['name' => 'nehal patel', 'roll_no' => 12, 'mobile' => 9999999999];
$students['yaminee'] = ['name' => 'yaminee patel', 'roll_no' => 13, 'mobile' => 9999999998];

echo "<br> <pre>";
print_r($students);
echo "</pre>";

// echo "<br>";
// echo "Student name is " . $students['name'];

?>