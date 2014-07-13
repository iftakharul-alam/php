
<?php
class information
{
	function id($data)
	{
		echo "ID : $data<br/>";
	}

	function name($data)
	{
	echo "Name : $data<br/>";
	}

	function salary($data)
	{
	echo "Salary : $data";
	}
	}

	$Information = new information();

	$Information -> id('007');
	$Information -> name('James');
	$Information -> salary('10000');