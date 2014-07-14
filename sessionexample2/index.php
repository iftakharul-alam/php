<html>
    <form action="details.php" method="get">
        <input type="submit" name="submit"/>
    </form>
    <?php
        require_once 'person.php';
        session_start();
        $person = new Person('James','g','boyel');
        $_SESSION['a_person'] = $person;
    ?>
</html>