<html>
    <head>
        <title>Example 4</title>
    </head>

    <body>
        <form method="post" action="circle.php">
            Enter Radius : <input type="text" name="radius"><br/>
            <input type="submit" value="Show" name="submit"/>
        </form>

        <?php
            include "circle_calculation.php";

            if(isset($_POST['submit']))
            {
                $myCircle = new circleCalculation();
                $myCircle -> radius = $_POST['radius'];

                echo "Diameter : ".$myCircle -> diameter()."<br/>";
                echo "Perimeter : ".$myCircle -> perimeter()."<br/>";
                echo "Area : ".$myCircle -> area();
            }

        ?>

    </body>
</html>