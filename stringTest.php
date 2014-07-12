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