<?php
	echo "<pre>";

	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	print_r(array_change_key_case($age,CASE_UPPER));
	
	echo "<br/>";
	
	$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
	print_r(array_chunk($cars,2));
	
	echo "<br/>";
	
	$fname=array("Peter","Ben","Joe");
	$age=array("35","37","43");
	
	$c=array_combine($fname,$age);
	print_r($c);