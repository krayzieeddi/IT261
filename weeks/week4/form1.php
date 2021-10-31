<?php
// our first form
// the form elements are important
// the form attributes and values are important
// use the global variable of $_POST
// the 2 items - the 2 input fields will be name and email


if (isset($_POST['name'], $_POST['email'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];

    // if any fields are empty then echo fill out fields
    if (empty($_POST['name'] && $_POST['email'])) {
        echo 'Please fill out the fields!';
    }
    else {
        // when all fields are entered then display the results when send
        echo $name;
        echo '<br>';
        echo $email;
    }
}
else {
    // echo entire HTML form if nothing is entered in the fields
    echo '
    <form action="" method="post">
        <labe>NAME</label>
        <input type="text" name="name">

        <labe>EMAIL</label>
        <input type="email" name="email">

        <input type="submit" value="Send It!">
    </form>
    ';
}