<html>
    <head>
        <title>::CIF::</title>
    </head>
    <body>
        <form method="get" action="bankaccount.php">
            Name:<input type="text" name="name"><br/>
            Account No:<input type="text" name="account">

            <input type="submit" value="Create" name="creation"/><br/>

            Amount: <input type="text" name="amount"/><br/>

            <input type="submit" value="Deposit" name="deposit"/>
            <input type="submit" value="With Draw" name="withdraw"/><br/>
            <input type="submit" value="Show Information" name="information"/>
        </form>
        <?php

        require 'account.php';
        session_start();

        if(isset($_GET['creation']))
        {
            $my_account = new Account($_GET['name'],$_GET['account']);

            $_SESSION['new_account'] = $my_account;
            echo "Account Created";
        }

        if(isset($_GET['deposit']))
        {
            $my_account = $_SESSION['new_account'];
            $my_account -> deposit($_GET['amount']);
            $_SESSION['new_account'] = $my_account;
            echo "Amount deposited";
        }
        if(isset($_GET['withdraw']))
        {
            $my_account = $_SESSION['new_account'];
            $my_account -> withdraw($_GET['amount']);
            $_SESSION['new_account'] = $my_account;
        }
        if(isset($_GET['information']))
        {
            $my_account = $_SESSION['new_account'];
            echo $my_account -> getName()."<br/>";
            echo $my_account -> getAccount()."<br/>";
            echo $my_account -> getBalance();


        }

        ?>
    </body>
</html>