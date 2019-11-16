<?php 
	// now if you just include its not gonna work
	// you have to include he namespace also
	require_once('java.php');
	require_once('Php.php');
	require_once('Ruby.php');

	$javaobj = new 	javaanother\Java;
	$phpobj  = new phpanother\Php;
	$rubyobj = new rubyanother\Ruby;
	
?>