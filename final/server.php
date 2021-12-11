<?php
// our server page this is where we will connect to our database

// session is a way to store info, variables to be use across several pages
session_start();

include('config.php');
// this is where we evenutall place include for our header.php

// connecting to database
// we need to connect to the database using mysql_connect() function
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// this section to for the register page for the user ---------------------------------------------------------------------
// if (isset reg_user)

if (isset($_POST['reg_user'])) {
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

    // we want end user to fill everthing out if it is empty - then use new function array_push()
    if(empty($first_name)) {
        array_push($errors, 'First Name is required!');
    }

    if(empty($last_name)) {
        array_push($errors, 'Last Name is required!');
    }

    if(empty($email)) {
        array_push($errors, 'Email is required!');
    }

    if(empty($username)) {
        array_push($errors, 'Username is required!');
    }

    if(empty($password_1)) {
        array_push($errors, 'Password is required!');
    }

    if($password_1 !== $password_2) {
        array_push($errors, 'Password do not match');
    }

    // we are checking the username and password and selecting from the table and then limits is to 1 for unqie users and emails
    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1  ";

    $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));;

    $rows = mysqli_fetch_assoc($result);

    // this block makes sure that you cannot create an already existing username or email
    if ($rows) {
        if ($rows['username'] == $username) {
            array_push($errors, 'Username already exists!');
        }

        if ($rows['email'] == $email) {
            array_push($errors, 'Email already exists!');
        }
    } // end of big rows

    // if everything is ok - no errors - then ok the password
    if (count($errors) < 1) {
        //  new function md5() function - this will spit out in your database a 32 hex character value for password
        $password = md5($password_1);

        // insert the registration data into our user table by using INSERT
        $query = "INSERT INTO users(first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";

        mysqli_query($iConn, $query);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = $success;

        header('Location:login.php');
        
    } // end of error count

} // of of isset reg_user

// this section is for the login page when you hit submit -----------------------------------------------------------------------
// now communicate to the login.php with the login page submit name set to login_user
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

    if (empty($username)) {
        array_push($errors, 'Username is required');
    }

    if (empty($password)) {
        array_push($errors, 'Password is required');
    }

    // count the errors and if they = to 0 we are good
    if (count($errors) == 0) {
        $password = md5($password);

        // now to make sure there is only one username and one password
        // will be select info from table
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";

        $result = mysqli_query($iConn, $query);

        // if our username and password is = to 1 then its good meaning if the username and password are on the same table row
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = $success;

            // if we are successful - then direct to index.php page
            header('Location:index.php');
        }
        else {
            array_push($errors, 'Wrong username password combo');
        }

    } // end of count 

} // end of isset for login