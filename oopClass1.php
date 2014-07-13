
<?php
/*class information
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
	$Information -> salary('10000'); */
	
?>
<html>
	<head>
	
	</head>
	
	<body>
		<form action='oopClass1.php' method='post'>
			<input type='text' name='idText'><br/>
			<input type='text' name='nameText'><br/>
			<input type='text' name='salaryText'><br/>
			<input type='submit' name='submitButton' value='Submit'><br/>
		</form>
		<?php 
		
			require 'employee.php';

			if (isset($_POST['submitButton']))
			{
				$employeeObj = new Employee();
				$employeeObj -> id = $_POST['idText'];
				$employeeObj -> name = $_POST['nameText'];
				$employeeObj -> salary = $_POST['salaryText'];
				
				
				echo $employeeObj -> id." ".$employeeObj -> name." ". $employeeObj -> salary;
			}
		
			
		?>
	</body>
</html>




































