<html>
    <head>

    </head>
    <body>
        <?php
            require 'person.php';
            $a_person = new Person();
            $a_person -> first_name = 'one';
            $a_person -> last_name = 'two';
            $a_person -> middle_name = 'three';

            echo $a_person -> get_full_name()."<br/>";
            echo $a_person -> get_reverse_name();
        ?>
    </body>
</html>