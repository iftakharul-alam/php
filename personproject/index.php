<html>
    <head>

    </head>
    <body>
        <?php
            require 'person.php';
            $a_person = new Person();
            //$a_person -> first_name = 'one';
            $a_person -> set_first_name('James');
            $a_person -> set_middle_name('Row');
            $a_person -> set_last_name('Wimbley');

            echo $a_person -> get_full_name()."<br/>";
            echo $a_person -> get_reverse_name();
        ?>
    </body>
</html>