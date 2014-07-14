<html>
    <head>

    </head>
    <body>
        <form method="post" action="calculator.php">
            First Number : <input type="text" name="first_no"/><br/>
            Second Number : <input type="text" name="second_no"/><br/>
            <input type="submit" name="add" value="Add">
            <input type="submit" name="substract" value="Substract">
            <input type="submit" name="multiply" value="Multiply">
            <input type="submit" name="divide" value="Divide">
        </form>
        <?php
            require 'basecalculator.php';

            $myCalculator = new basecalculator();

            if((isset($_POST['first_no'])) && (isset($_POST['second_no'])))
            {
                $first_no = $_POST['first_no'];
                $second_no = $_POST['second_no'];
            }

            if(isset($_POST['add']))
            {
                echo "Addition : ".$myCalculator -> add_number($first_no,$second_no);
            }
            else if(isset($_POST['substract']))
            {
                echo "Subtraction : ".$myCalculator -> sub_number($first_no,$second_no);
            }
            else if(isset($_POST['multiply']))
            {
                echo "Multiplication : ".$myCalculator -> mult_number($first_no,$second_no);
            }
            else if(isset($_POST['divide']))
            {
                echo "Division : ".$myCalculator -> div_number($first_no,$second_no);
            }
        ?>
    </body>
</html>