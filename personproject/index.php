<html>
    <head>

    </head>
    <body>
        <?php
            require 'person.php';
            $a_person = new Person('James','R.','Gavin');
            //$a_person -> first_name = 'one';
            //$a_person -> setFirstName('James');
            //$a_person -> setMiddleName('W');
            //$a_person -> setLastName('Moddy');

            echo $a_person -> get_full_name()."<br/>";
            echo $a_person -> get_reverse_name();
        ?>
    </body>
</html>