<?php
// our first form
// the form elements are important
// the form attributes and values are important
// use the global variable of $_POST
// the 2 items - the 2 input fields will be name and email


if (isset($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['comments'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    // if any fields are empty then echo fill out fields
    if (empty($_POST['fname'] && $_POST['lname'] && $_POST['email'] && $_POST['comments'])) {
        echo 'Please fill out the fields!';
    }
    else {
        // when all fields are entered then display the results when send
        echo $fname;
        echo '<br>';
        echo $lname;
        echo '<br>';
        echo $email;
        echo '<br>';
        echo $comments;
    }
}
else {
    // echo entire HTML form if nothing is entered in the fields
    echo '
    <form action="" method="post">
        <labe>FIRST NAME</label>
        <input type="text" name="fname">

        <labe>LAST NAME</label>
        <input type="text" name="lname">

        <labe>EMAIL</label>
        <input type="email" name="email">

        <labe>Comments</label>
        <textarea name="comments"></textarea>

        <input type="submit" value="Send It!">
    </form>
    ';
}