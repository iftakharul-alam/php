<html>
    <head>
        <title>
            ::Compound Interest::
        </title>
    </head>
    <body>
        <h2>Compound Interest Calculator</h2>
        <form method="post" action="compoundinterest.php"/>

        Principle Amount : <input type="text" name="principle"/><br/>
        Annual Interest Rate: <input type="text" name="rate"/><br/>
        Compound Interval : <select name="interval">
                                <option value=12>Monthly</option>
                                <option value=4>Quarterly</option>
                                <option value=2>Half Yearly</option>
                                <option value=1>Yearly</option>
                            </select><br/>
        Time period : <input type="text" name="time">Year<br/>
        <input type="submit" value="Submit" name="submit"/>

        </form>
        <?php
            include 'compoundcalculator.php';

            if(isset($_POST['submit']))
            {
                $compoundInterest = new compoundCalculator();

                $compoundInterest -> principle = $_POST['principle'];
                $compoundInterest -> rate = $_POST['rate'];
                $compoundInterest -> time = $_POST['time'];
                $compoundInterest -> interval = $_POST['interval'];

                echo "Result : ".$compoundInterest -> compound_interest();
            }
        ?>
    </body>
</html>