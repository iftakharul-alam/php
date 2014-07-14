<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <form>
            Customer Name :<input type="text" name="name"><br/>
            Account No:<input type="text" name="account"/> <input type="submit" value="Create" name="create"><br/>
            Amount: <input type="text" name="amount"><br/>
            <input type="submit" value="Deposit" name="deposit">
            <input type="submit" value="Withdraw" name="withdraw">
            <input type="submit" value="Show" name="show">
        </form>
        <?php
            require_once 'account.php';
            session_start();
        if(isset($_GET['create']))
        {
            $account = new Account($_GET['name'],$_GET['account'],$_GET['name']);
            $_SESSION['an_account'] = $account;
                echo "Account created";
        }
        if(isset($_GET['deposit']))
        {
            $account = $_SESSION['an_account'];
            $account -> deposit($_GET['amount']);
            $_SESSION['an_account'] = $account;
            echo 'deposited';
        }
        if(isset($_GET['withdraw']))
        {
            $account = $_SESSION['an_account'];
            $account -> withdraw($_GET['amount']);
            $_SESSION['an_account'] = $account;
            echo 'withdrawn';
        }
        if(isset($_GET['show']))
        {
            $account = $_SESSION['an_account'];
            echo $account -> getName()."<br/>";
            echo $account -> getAmount()."<br/>";
            echo $account -> getBalance();
        }

        ?>
    </body>
</html>