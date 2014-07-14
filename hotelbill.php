<html>
    <head>
        <title>Hotel Bill</title>
    </head>
    <body>
        <form method="post" action="hotelbill.php"/>
        You have taken <br/>
        Rice: <input type="text" name="rice"/> Unit (20 tk. per unit)<br/>
        Vegetable: <input type="text" name="vegetable"/> Unit (30 tk. per unit)<br/>
        Fish: <input type="text" name="fish"/> Unit (80 tk. per unit)<br/>
        Meat: <input type="text" name="meat"/> Unit (120 tk. per unit)<br/>
        VAT: <input type="text" name="vat"> % of Gross Total <br/>
        <input type="submit" value="Show bill" name="submit"/><br/>
        </form>

        <?php
        include 'billcalculator.php';
        if(isset($_POST['submit']))
        {
            $bill -> rice = $_POST['rice'];
            $bill -> vegetable = $_POST['vegetable'];
            $bill -> fish = $_POST['fish'];
            $bill -> meat = $_POST['meat'];
            $bill -> vat = $_POST['vat'];
            echo "Gross Total:".$bill -> gross_bill()."<br/>";
            echo "Payable Amount(Gross Total - VAT) :".$bill -> payable_bill();
        }
        ?>
    </body>
</html>