<?php 


	function add($x, $y){

		if( $x > 0){
			return $x + $y;
		}

		return "invalid values";

	}


	$a = add(-10, 20);

	echo $a;

 ?>