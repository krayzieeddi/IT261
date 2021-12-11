<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

$first_name = '';
$last_name = '';
$email = '';
$username = '';
$password = '';
$success = 'You have successfully logged on';
$errors = array();

function myError($myFile, $myLine, $errorMsg) {

    if(defined('DEBUG') && DEBUG) {
        echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
        die();
    }  
    else {
        echo ' Houston, we have a problem!';
        die();
    }
}

// this if else statement is to get the current day of the user
if (isset($_GET['today'])) {
    $today = $_GET['today'];
}
else {
    $today = date('l');
}

// this will just define the THIS_PAGE as a key work for current page
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// NAVIGATION section -------------------------------------------------------------

// // defining the nav associative array
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['planeswalkers.php'] = 'Planeswalkers';
$nav['contact.php'] = 'Contact';

// passes the nav array into the navigation function for current page highlighting
function myNav($nav) {
    $myReturn = '';

    foreach ($nav as $key => $value) {

        if (THIS_PAGE == $key) { 
            $myReturn .= '<li><a href="'.$key.'" class="current">'.$value.'</a></li>'; 
        }
        else {
            $myReturn .= '<li><a href="'.$key.'">'.$value.'</a></li>';
        }
    } //end of for each

    return $myReturn;
} // end of myNav function

// SWITCH STATEMENT for current page section ------------------------------------------------------------

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Welcome to Magic the gathering';
        $body = 'home';
        $headline = 'Welcome to Magic the Gathering';
        break;

    case 'about.php':
        $title = 'About magic the gathering';
        $body = 'about inner';
        $headline = 'About the game';
        break;

    case 'daily.php':
        $title = 'Ways to play';
        $body = 'daily inner';
        $headline = 'The many ways to play';
        break;

    case 'planeswalkers.php':
        $title = 'Planeswalkers';
        $body = 'project inner';
        $headline = 'List of Planeswalkers';
        break;

    case 'project-view.php':
        $title = 'Planeswalkers view';
        $body = '';
        $headline = '';
        break;

    case 'contact.php':
        $title = 'contact us';
        $body = 'contact inner';
        $headline = 'Please let us know about your favorite magic set';
        break;

    case 'thx.php':
        $title = 'thx page';
        $body = 'thx inner';
        $headline = 'Thank you for your survey answers';
        break; 

}

// ramdom pictures for website index page
$photos[0] = 'pic1';
$photos[1] = 'pic2';
$photos[2] = 'pic3';

$i = rand(0, 2);
$selected_image = ''.$photos[$i].'.JPG'; 

function randomPic($selected_image, $i, $photos) {
    echo '<img class="center" src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
}

// emailable form php -----------------------------------------------

    $first_name = '';
    $last_name = '';
    $email = '';
    $cardSet = array(); 
    $localStore = '';
    $comments = '';
    $privacy = '';
    $phone = '';
    
    $first_name_Err = '';
    $last_name_Err = '';
    $email_Err = '';
    $cardSet_Err = ''; 
    $localStore_Err = '';
    $comments_Err = '';
    $privacy_Err = '';
    $phone_Err = '';
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        if (empty($_POST['first_name'])) {
            $first_name_Err = 'Please fill out your First Name';
        }
        else {
            $first_name = $_POST['first_name'];
        }
    
        if (empty($_POST['last_name'])) {
            $last_name_Err = 'Please fill out your Last Name';
        }
        else {
        $last_name = $_POST['last_name'];
        }  
    
        if (empty($_POST['email'])) {
            $email_Err = 'Please fill out your Email';
        }
        else {
            $email = $_POST['email'];
        }
    
        if (empty($_POST['cardSet'])) {
            $cardSet_Err = 'Please select your card set';
        }
        else {
            $cardSet = $_POST['localStore'];
        }
    
        if ($_POST['localStore'] == NULL) {
            $localStore_Err = 'Please select your local store';
        }
        else {
            $localStore = $_POST['localStore'];
        }
    
        if (empty($_POST['comments'])) {
            $comments_Err = 'You must comment something';
        }
        else {
            $comments = $_POST['comments'];
        }
    
        if (empty($_POST['privacy'])) {
            $privacy_Err = 'You must agree';
        }
        else {
            $privacy = $_POST['privacy'];
        }
    
        if(empty($_POST['phone'])) {  // if empty, type in your number
            $phone_Err = 'Your phone number please!';
        } 
        elseif(array_key_exists('phone', $_POST)){
            if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) { 
                // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
                $phone_Err = 'Invalid format!';
            } 
            else {
                $phone = $_POST['phone'];
            }
        }
    
        function myCardSet() {
        // the logic is if post cardSet is NOT EMPTY, then, we need to 
        // grab the cardSet and display the, just like we did our implode.php
    
            $myReturn = '';
    
            if (!empty($_POST['cardSet'])) {
                $myReturn = implode(', ', $_POST['cardSet']);
            }
    
            return $myReturn;
        } // end of mycardSet function 
    
        // email content section ----------------------------------------
        if(isset($_POST['first_name'], 
                $_POST['last_name'],
                $_POST['email'],
                $_POST['cardSet'],
                $_POST['localStore'],
                $_POST['comments'],
                $_POST['privacy'],
                $_POST['phone']
        )) {
            $to = 'szemeo@mystudentswa.com';
            $subject = 'test email,'.date('m/d/y');
            $body = '
            Your name is: '.$first_name.' '.$last_name.' '.PHP_EOL.'
            Email: '.$email.' '.PHP_EOL.'
            Phone: '.$phone.' '.PHP_EOL.'
            Your local store: '.$localStore.' '.PHP_EOL.'
            Your favorite card set: '.mycardSet().' '.PHP_EOL.'
            Comments: '.$comments.' '.PHP_EOL.'
            ';
    
            $headers = array(
                'From' => 'noreply@email.com',
                'Reply-to' => ''.$email.''
            );
    
            mail($to, $subject, $body, $headers);
            header('Location: thx.php');
        }
    
    } // end of server request 

?>