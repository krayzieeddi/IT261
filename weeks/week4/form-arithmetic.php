<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>arithmetic form</title>
<style>
    form {
        width:400px;
        margin:0 auto;
    }
    fieldset {
        border:1px solid red;
        padding:10px;
    }
    label, textarea {
        display:block;
        margin-bottom:5px;
    }
    input[type=text], input[type=email], textarea  {
        width:90%;
    }
    input, textarea {
        margin-bottom:10px;
    }
    h3 {
        color:red;
        text-align:center;
    }
    .box {
        width:400px;
        margin:20px auto;
        padding:15px;
        background:beige;
    }

</style>

</head>

<body>
    <form action="" method="post">
        <fieldset>

            <label for="fname">First Name</label>
            <input type="text" name="fname">

            <label for="coffees">How many coffees?</label>
            <input type="number" name="coffees">

            <label for="lattes">Lattes</label>
            <input type="number" name="lattes">

            <label for="caps">Cappucino</label>
            <input type="number" name="caps">

            <input type="submit" value="SEND IT">

        </fieldset>
    </form> <!-- end of form ////////////////////////// -->

    <?php
// form 3 - adding the HTML and CSS
// put the php in the middle of HTML so you can use echo
if (isset($_POST['fname'], $_POST['coffees'], $_POST['lattes'], $_POST['caps'])) {
    $fname = $_POST['fname'];

    // use the intval() method to display ingeter values for the inner if statement check
    $coffees = $_POST['coffees'];
    $int_coffees = intval($coffees);

    $lattes = $_POST['lattes'];
    $int_lattes = intval($lattes);

    $caps = $_POST['caps'];
    $int_caps = intval($caps);

    $total = $int_coffees + $int_lattes + $int_caps;

    // nested if statement
    if (empty($fname && $int_coffees && $int_lattes && $int_caps)) {
        echo '<h3>Please fill out the input fields.</h3>';
    }
    else {
        // echo $fname;
        // echo $lname;
        // echo $email;
        // echo $comments;

        // displays the info in a list format
        echo '
            <div class="box">
                <h2>Hello '.$fname.'</h2>
                <p>You have ordered the following:</p>

                <ul>
                    <li>'.$int_coffees.' Coffees</li>
                    <li>'.$int_lattes.' Lattes</li>
                    <li>'.$int_caps.' Cappucino</li>
                </ul>

                <p>Totalling '.$total.' beverages</p>
            </div>
        ';

    } // end of inner if statement

} // end isset
// end of php ----------------------------------
?> 
</body>
</html>

