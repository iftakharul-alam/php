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
	
	echo "<br/>";
	
	$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
	$a2=array("e"=>"red","f"=>"green","g"=>"blue");
	
	$result=array_diff($a1,$a2);
	print_r($result);
	
	echo "<br/>";
	
	$a1=array_fill(3,4,"blue");
	print_r($a1);
	
	echo "<br/>";
	
	$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
	$result=array_flip($a1);
	print_r($result);
	
	echo "<br/>";
	
	$a=array("Volvo"=>"XC90","BMW"=>"X5");
	if (array_key_exists("Volvo",$a))
	{
		echo "Key exists!";
	}
	else
	{
		echo "Key does not exist!";
	}
	
	echo "<br/>";
	
	$a1=array("red","green");
	$a2=array("blue","yellow");
	print_r(array_merge($a1,$a2));
	
	echo "<br/>";
	
	$a=array("red","green","blue");
	array_pop($a);
	print_r($a);
	
	echo "<br/>";
	
	$a=array("Dog","Cat","Horse","Bear","Zebra");
	array_multisort($a);
	print_r($a);
	
	echo "<br/>";
	
	$a=array("red","green","blue","yellow","brown");
	$random_keys=array_rand($a,3);
	echo $a[$random_keys[0]]."<br>";
	echo $a[$random_keys[1]]."<br>";
	echo $a[$random_keys[2]];
	
	echo "<br/>";
	
	$a1=array("red","green");
	$a2=array("blue","yellow");
	print_r(array_replace($a1,$a2));
	
	echo "<br/>";
	
	function myfunction($v1,$v2)
	{
		return $v1 . "-" . $v2;
	}
	$a=array("Dog","Cat","Horse");
	print_r(array_reduce($a,"myfunction"));
	
	echo "<br/>";
	
	$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
	print_r(array_reverse($a));
	
	echo "<br/>";
	
	$a=array("a"=>"red","b"=>"green","c"=>"blue");
	echo array_search("red",$a);
	
	echo "<br/>";
	
	$a=array("a"=>"red","b"=>"green","c"=>"blue");
	echo array_shift($a)."<br/>";
	print_r ($a);
	
	echo "<br/>";
	
	$a=array("red","green","blue","yellow","brown");
	print_r(array_slice($a,3));
	
	echo "<br/>";
	
	$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
	$a2=array("a"=>"purple","b"=>"orange");
	array_splice($a1,0,2,$a2);
	print_r($a1);
	
	echo "<br/>";
	
	$a=array(5,15,25);
	echo array_sum($a);
	
	echo "<br/>";
	
	$a=array("a"=>"red","b"=>"green","c"=>"red");
	print_r(array_unique($a));
	
	echo "<br/>";
	
	$a=array("a"=>"red","b"=>"green");
	array_unshift($a,"blue");
	print_r($a);
	
	echo "<br/>";
	
	$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
	print_r(array_values($a));
	
	echo "<br/>";
	
	$cars=array("Volvo","BMW","Toyota");
	echo count($cars);
	
	echo "<br/>";
	
	$people = array("Peter", "Joe", "Glenn", "Cleveland");
	print_r (each($people));
	
	echo "<br/>";
	
	$my_array = array("Dog","Cat","Horse");
	
	list($a, $b, $c) = $my_array;
	echo "I have several animals, a $a, a $b and a $c.";
	
	echo "<br/>";
	
	$people = array("Peter", "Joe", "Glenn", "Cleveland");
	
	echo current($people) . "<br>";
	echo next($people) . "<br>";
	
	echo reset($people);
	
	echo "<br/>";
	
	$number = range(0,5);
	print_r ($number);
	
	echo "<br/>";
	
	$people=array("Peter","Joe","Glenn","Cleveland");
	echo "The key from the current position is: " . key($people);
	
	echo "<br/>";
	
	$people = array("Peter", "Joe", "Glenn", "Cleveland");
	
	if (in_array("Glenn", $people))
	{
		echo "Match found";
	}
	else
	{
		echo "Match not found";
	}
	
	echo "<br/>";
	
	$a = "Original";
	$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
	extract($my_array);
	echo "\$a = $a; \$b = $b; \$c = $c";
	
	echo "<br/>";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	