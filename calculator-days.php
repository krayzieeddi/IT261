<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">

<style>
    label {
        display:block;
    }
    form{
        background:beige;
        width:500px;
        margin:30px auto;
    }
    .box {
        width:500px;
        margin:0 auto;
        border:1px solid black;
    }
    .box p {
        font-size:1.1em;
        margin-left:10px;
    }
    .error {
        width:500px;
        margin:0 auto;
        border:1px solid black;
        color:red;
        font-size:1.2em;
        text-align:center;
        padding:8px;
    }
    .error p {
        color:black;
        font-size:1.2em;
    }
    h1 {
        color:red;
        text-align:center;
    }
</style>

<title>calculator-days page</title>

</head>

<body> <!-- start of body //////////////////////// -->

<h1>Our trip calculator</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <fieldset>
            <label for="name">Your Name</label>
            <input type="text" name="name">

            <label for="miles">How many miles will you be driving?</label>
            <input type="text" name="miles">

            <label for="hours">How many hours per day will you be driving?</label>
            <input type="text" name="hours">

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
            
            if (empty($_POST['name'] && $_POST['miles'] && $_POST['hours'] && $_POST['price'] && $_POST['efficiency'] )) {
               echo '<div class="error">   
                        <h1>Error!</h1>
                        <p>Please fill out the fields</p>
                    </div>';
            }
            else if (isset($_POST['name'], $_POST['miles'], $_POST['hours'], $_POST['price'], $_POST['efficiency'] )) {
                $name = $_POST['name'];
                $miles = $_POST['miles'];
                $hours = $_POST['hours'];
                $price = $_POST['price'];
                $efficiency = $_POST['efficiency'];

                $cost = number_format(($miles / $efficiency) * $price, 2);

                $days = $miles / ($hours * 65);

                $totalHours = $days * $hours;

                // echo statement for displaying results to end user
                echo ' 
                    <div class="box">
                        <h1>Calculator Results</h1>
                        <p>'.$name.', you will be driving <b>'.$miles.' miles</b></p>
                        <p>Your vechicle has an efficiency rating of <b>'.$efficiency.' miles per gallon</b></p>
                        <p>Your total cost for gas will be <b>$'.$cost.' dollars</b></p>
                        <p>You will be driving a total of <b>'.$totalHours.' hours equating to '.$days.' days.</b></p>
                    </div>
                ';
               
            } // end of else if inner if loop
            
        } // end of server request

    ?>

    <ul>
        <li><a href="calculator.php">calculator.php</a></li>
        <li><a href="calculator-days-errors.php">calculator-days.php</a></li>
        <li><a href="calculator-days-errors-sticky.php">calculator-days-errors.php.php</a></li>
    </ul>

</body>

</html>
