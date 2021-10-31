<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
<link href="css/styles_week5.css" type="text/css" rel="stylesheet">

<title>Basic currency form</title>

</head>

<body> <!-- start of body //////////////////////// -->

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <fieldset>
            <label for="name">NAME</label>
            <input type="text" name="name">

            <label for="email">EMAIL</label>
            <input type="email" name="email">

            <label for="amount">How much money do you have?</label>
            <input type="number" name="amount">

            <label for="currency">Chosse your currency</label>

        <ul>
            <li><input type="radio" name="currency" value="0.013">Rubles</li>
            <li><input type="radio" name="currency" value="0.76">Canadian</li>
            <li><input type="radio" name="currency" value="1.28">Pounds</li>
            <li><input type="radio" name="currency" value="1.18">Euros</li>
            <li><input type="radio" name="currency" value="0.0094">Yen</li>
        </ul>

        <input type="submit" value="Convert it!">

        <p><a href="">Reset</a></p>

        </fieldset>

    </form> <!-- end of form //////////////////////// -->

    <!-- start of php //////////////////////// -->
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if (empty($_POST['name'] && $_POST['email'] && $_POST['amount'] && $_POST['currency'])) {
                echo 'Please fill out the fields!';
            }
            else if (isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $amount = $_POST['amount'];
                $currency = $_POST['currency'];
                
                $dollars = $amount * $currency;
                $friendly_dollars = floor($dollars);
                
                echo '
                    <div class="box">

                        <h2>Hello, '.$name.'</h2>

                        <p>You now have $'.$friendly_dollars.' American dollars!
                        and we will be sending you an email at: <b>'.$email.'</b></p>

                    </div>
                ';
               
            } // end of else if inner if loop
            
        } // end of server request

    ?>

</body>

</html>
