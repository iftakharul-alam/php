<?php
	$str = addcslashes("Hello World!","W");
	echo($str);
	
	echo '<br/>';
	
	$str = addslashes('What does "yolo" mean?');
	echo($str);
	
	echo '<br/>';
	
	$str = "Hello World!";
	echo $str . "<br>";
	echo chop($str,"World!");
	
	echo '<br/>';
	
	$str = "Hello world!";
	echo chunk_split($str,2,".");
	
	echo '<br/>';
	
	$str = "Hello World!";
	echo count_chars($str,3);
	
	echo '<br/>';
	
	$str = "Hello world. It's a beautiful day.";
	print_r (explode(" ",$str));