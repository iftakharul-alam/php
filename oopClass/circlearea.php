<html>
    <head>

    </head>
    <body>
        <form method="post" action="circlearea.php">
        Radius of circle : <input type="text" name="radius"> <input type="submit" value="Area" name="submit">
        </form>
        <?php
            include 'circle.php';
            if(isset($_POST['submit']))
            {
                $mycircle = new circle();
                $mycircle -> radius = $_POST['radius'];
                echo "Area of circle is ".$mycircle -> circle_area();
            }
        ?>
    </body>
</html>