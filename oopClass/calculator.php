<html>
    <head>

    </head>
    <body>
        <form method="post" action="calculator.php">
            First Number : <input type="text" name="fnumber"/><br/>
            Second Number : <input type="text" name="snumber"/><br/>
            <input type="submit" name="add" value="Add">
            <input type="submit" name="substract" value="Substract">
            <input type="submit" name="multiply" value="Multiply">
            <input type="submit" name="divide" value="Divide">
        </form>
        <?php
            require 'basecalculator.php';

            $myCalculator = new basecalculator();

            if(isset($_POST['add']))
            {

                $myCalculator -> fnumber = $_POST['fnumber'];
                $myCalculator -> snumber = $_POST['snumber'];
                echo "Addition : ".$myCalculator -> add_number();
            }
            if(isset($_POST['substract']))
            {

                $myCalculator -> fnumber = $_POST['fnumber'];
                $myCalculator -> snumber = $_POST['snumber'];
                echo "Subtraction : ".$myCalculator -> sub_number();
            }
            if(isset($_POST['multiply']))
            {

                $myCalculator -> fnumber = $_POST['fnumber'];
                $myCalculator -> snumber = $_POST['snumber'];
                echo "Multiplication : ".$myCalculator -> mult_number();
            }
            if(isset($_POST['divide']))
            {

                $myCalculator -> fnumber = $_POST['fnumber'];
                $myCalculator -> snumber = $_POST['snumber'];
                echo "Division : ".$myCalculator -> div_number();
            }
        ?>
    </body>
</html>