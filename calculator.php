<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
<!-- <link href="css/styles_week5.css" type="text/css" rel="stylesheet"> -->
<style>
    label {
        display:block;
    }
    form{
        background:beige;
    }

</style>


<title>calculator page</title>

</head>

<body> <!-- start of body //////////////////////// -->

    <h1>Our trip calculator</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <fieldset>
            <label for="miles">How many miles will you be driving?</label>
            <input type="text" name="miles">

            <!-- <label for="email">EMAIL</label>
            <input type="email" name="email">

            <label for="amount">How much money do you have?</label>
            <input type="number" name="amount"> -->

            <label for="price">Price per gallon</label>

            <ul>
                <li><input type="radio" name="price" value="3">$3.00</li>
                <li><input type="radio" name="price" value="3.50">$.3.50</li>
                <li><input type="radio" name="price" value="4">$4.00</li>
            </ul>

            <label for="efficiency">Select your fuel efficiency</label>
            
            <select name="efficiency">
                <!-- the NULL is to make the select one as display only -->
                <option value="" NULL>Select one!</option> 

                <option value="10">Terrible</option>

                <option value="20">getting better</option>

                <option value="30">good</option>

                <option value="40">great</option>

            </select>

            <input type="submit" value="Calculate">

            <p><a href="">Reset</a></p>

        </fieldset>

    </form> <!-- end of form //////////////////////// -->

    <!-- start of php //////////////////////// -->
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if (empty($_POST['miles'] && $_POST['price'] && $_POST['efficiency'] )) {
               echo 'Please fill out the fields';
            }
            else if (isset($_POST['miles'], $_POST['price'], $_POST['efficiency'] )) {
                $miles = $_POST['miles'];
                $price = $_POST['price'];
                $efficiency = $_POST['efficiency'];

                $cost = ($miles / $efficiency) * $price;

                echo '<p>You have driven '.$miles.' miles</p>
                    <p>Your vechicle has an efficiency rating of '.$efficiency.' miles per gallon</p>
                    <p>Your total cost for gas will be $'.$cost.' dollars</p>
                ';
               
            } // end of else if inner if loop
            
        } // end of server request

    ?>

    <ul>
        <li><a href="calculator-days.php">calculator.php</a></li>
        <li><a href="calculator-days-errors.php">calculator-days.php</a></li>
        <li><a href="calculator-days-errors-sticky.php">calculator-days-errors.php.php</a></li>
    </ul>

</body>

</html>
