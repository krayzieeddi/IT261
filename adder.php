<!doctype html>
<html lang="en">
<head>
<title>My Adder Assignment</title>
<style>
      p {
        color:red;
        text-align: center;
    }
    
    h1 {
        color:green;
        text-align: center;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
    }
    form {
        width:350px;
        margin:0 auto;
        border:1px solid red;
        padding:10px;
    }

</style>
</head>

<body>

<h1>Adder.php</h1> 

<form action="" method="post">

<label>Enter the first number: </label>
<input type="number" name="num1">
<br>

<label>Enter the second number: </label>
<input type="number" name="num2">
<br>

<input type="submit" value="Add Em!!"> 

</form>

<?php

if (isset($_POST['num1'], $_POST['num2'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = $num1 + $num2;

    echo '<h2>You added '. $num1 .' and '.$num2.'</h2>';
    echo '<p style="color:red;"> and the answer is <br>'. $myTotal .'!</p>';
    echo '<p><a href="">Reset page</a></p>';
}
?>

</body>
</html>

<!-- php section should go after the form tag instead of being on top of the page--> 
<!-- no php ending tag-->
<!-- the num2 post was not in the isset if parameters -->
<!-- the num2 in the myTotal equation had a capital letter in it -->
<!-- mytotal varible should only be the = operator -->
<!-- the first echo statement was missing single quotes and had double quotes -->
<!-- first echo statement missing closing h2 tag -->
<!-- second echo statement missing closing p tag, single quote, and semi colon -->
<!-- second echo statement had misplaces style tag and has double quotes while missing single quotes -->
<!-- second echo statement had extra closing p tag -->
<!-- last echo statement missing closing p tag and semi colon -->

<!-- missing html doctype-->
<!-- misisng lang attribute for opening html tag-->
<!-- opening form tag was closing tag and missing method="post" attribute -->
<!-- missing opening label tag for first label -->
<!-- first input tag name attribute mispelled num1 with capital letter-->
<!-- both input tags has text type instead of number type -->
<!-- second label has no closing label tag and opening tag was not right-->
<!-- last input tag missing double quote at the end -->
<!-- no html closing tag-->
<!-- no body closing tag-->

