<?php 

	$i = '10';

	// echo $i + 10;
	
	$b = "0"; //String

	$c = 0;		//int

	if($b === $c)
	{
		echo "We are inside";
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


	$nehal = "SDJ International College";

	$test = 'nehal';

	echo "<br>";

	echo $$test;



 ?>