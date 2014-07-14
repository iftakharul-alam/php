<html>
    <head>

    </head>
    <body>
        <form method="post" action="circlearea.php">
        Radius of circle : <input type="text" name="radius"> <input type="submit" value="Area" name="submit">
        </form>
        <?php
            include 'circleareacal.php';
            if(isset($_POST['submit']))
            {
                $circle = new circleareacal();
                $circle -> radius = $_POST['radius'];
                echo "Area of circle is ".$circle -> circle_area();
            }
        ?>
    </body>
</html>