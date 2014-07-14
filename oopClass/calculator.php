<html>
    <head>

    </head>
    <body>
        <form method="post" action="calculator.php">
            First Number : <input type="text" name="first_no"/><br/>
            Second Number : <input type="text" name="second_no"/><br/>
            <input type="submit" name="add" value="Add">
            <input type="submit" name="subtract" value="Substract">
            <input type="submit" name="multiply" value="Multiply">
            <input type="submit" name="divide" value="Divide">
        </form>
        <?php
            require 'basecalculator.php';

            $myCalculator = new calculator();

            if((isset($_POST['first_no'])) && (isset($_POST['second_no'])))
            {
                $first_no = $_POST['first_no'];
                $second_no = $_POST['second_no'];
            }

            if(isset($_POST['add']))
            {
                echo "Addition : ".$myCalculator -> add($first_no,$second_no);
            }
            else if(isset($_POST['subtract']))
            {
                echo "Subtraction : ".$myCalculator -> subtract($first_no,$second_no);
            }
            else if(isset($_POST['multiply']))
            {
                echo "Multiplication : ".$myCalculator -> multiply($first_no,$second_no);
            }
            else if(isset($_POST['divide']))
            {
                echo "Division : ".$myCalculator -> division($first_no,$second_no);
            }
        ?>
    </body>
</html>