<?php 
	// you have to include he namespace also
	require_once('java.php');
	require_once('Php.php');
	require_once('Ruby.php');
	// you can use the alias if youwant
	use javaanother\Java as jv;
	use phpanother\Php as ph;
	use rubyanother\Ruby as rb;
	$javaobj = new 	jv;
	$phpobj  = new ph;
	
	$rubyobj = new rb;
	// if you use the define function
	// after addin ghr namespace you can easily 
	//directly apply this thing
	echo HTML;

	// this aliases will produces the same result
	// its like  a virtual diectory structure
	phpanother\coding();
	

?>