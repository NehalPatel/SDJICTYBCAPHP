<?php 

	$i = 10; //integer
	$i = 10.20; //double
	$i = '10'; //string

	// echo $i + 10;
	
	$b = "2"; //String
	$c = 2;		//int


	if($b == $c)
	{
		echo "Only values will be checked"; //true
	}

	if($b === $c)
	{
		echo "Dataypes & values will be checked"; //false
	}

	echo "<br> out";

	$d = null;

	if($d != null){
		echo "<br> d variable is null";
	}


	$e = '';

	if(empty($e)){
		echo "<br> e variable is empty";
	}

	//String

	echo "<hr>";

	$college = "SDJIC $i $b $c";

	$college2 = 'SDJIC $i $b $c';

	echo $college;

	echo "<br>";

	echo $college2;


	echo "<p>\tGandhiji Said: \n 'Eye for an eye will make the whole world blind.'</p>";

	echo '<p>\tGandhiji Said: \n "Eye for an eye will make the whole world blind."</p>';

	echo '<p>Gandhiji Said: ' . "'Eye for an eye will make the whole world blind.'" . '</p>';


	$yaminee = "test";

	$nehal = "yaminee";

	$test = 'nehal';

	echo "<br>";

	echo "<hr>";
	echo $$$$test;
	echo "<hr>";


	echo "<br>";
	echo "The value of $test is: $test";
	echo "<br>";
	echo 'The value of $test is: $test';
	echo "<br>";
	echo 'The value of $test is:'. $test;
	
	echo "<br>";
	echo "The value of \$test is: $test";


	echo "<p>Gandhiji Said: \"Eye for an eye will make the whole world blind.\"</p>";

	echo "<p>Gandhiji Said: \\ \$ \"Eye for an eye will make the whole world blind.\"</p>";

 ?>