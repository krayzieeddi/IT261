<?php

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
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';


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
        $title = 'Home page of our IT261 website';
        $body = 'home';
        $headline = 'Welcome to our Home page of our IT 261 website';
        break;

    case 'about.php':
        $title = 'About page of our IT261 website';
        $body = 'about inner';
        $headline = 'Welcome to our about page of our IT 261 website';
        break;

    case 'daily.php':
        $title = 'Daily page of our IT261 website';
        $body = 'daily inner';
        $headline = 'Welcome to my daily page!';
        break;

    case 'project.php':
        $title = 'project page of our IT261 website';
        $body = 'project inner';
        $headline = 'Welcome to our project page of our IT 261 website';
        break;

    case 'contact.php':
        $title = 'contact page of our IT261 website';
        $body = 'contact inner';
        $headline = 'Welcome to our contact page of our IT 261 website';
        break;

    case 'garllery.php':
        $title = 'gallery page of our IT261 website';
        $body = 'gallery inner';
        $headline = 'Welcome to our garllery page of our IT 261 website';
        break;  

}

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4);
$selected_image = ''.$photos[$i].'.jpg'; 

function randomPic($selected_image, $i, $photos) {
    echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
}

// emailable form php -----------------------------------------------

    $first_name = '';
    $last_name = '';
    $gender = '';
    $email = '';
    $wines = array(); 
    $regions = '';
    $comments = '';
    $privacy = '';
    $phone = '';
    
    $first_name_Err = '';
    $last_name_Err = '';
    $gender_Err = '';
    $email_Err = '';
    $wines_Err = ''; 
    $regions_Err = '';
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
    
        if (empty($_POST['gender'])) {
            $gender_Err = 'Please check your Gender';
        }
        else {
            $gender = $_POST['gender'];
        }
    
        if (empty($_POST['email'])) {
            $email_Err = 'Please fill out your Email';
        }
        else {
            $email = $_POST['email'];
        }
    
        if (empty($_POST['wines'])) {
            $wines_Err = 'Please select your wines';
        }
        else {
            $wines = $_POST['regions'];
        }
    
        if ($_POST['regions'] == NULL) {
            $regions_Err = 'Please select your region';
        }
        else {
            $regions = $_POST['regions'];
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
    
        function myWines() {
        // the logic is if post wines is NOT EMPTY, then, we need to 
        // grab the wines and display the, just like we did our implode.php
    
            $myReturn = '';
    
            if (!empty($_POST['wines'])) {
                $myReturn = implode(', ', $_POST['wines']);
            }
    
            return $myReturn;
        } // end of myWines function 
    
        // email content section
        if(isset($_POST['first_name'], 
                $_POST['last_name'],
                $_POST['gender'],
                $_POST['email'],
                $_POST['wines'],
                $_POST['regions'],
                $_POST['comments'],
                $_POST['privacy'],
                $_POST['phone']
        )) {
            $to = 'edwinh300@gmail.com';
            $subject = 'test email,'.date('m/d/y');
            $body = '
            The first name is: '.$first_name.' '.PHP_EOL.'
            The last name is: '.$last_name.' '.PHP_EOL.'
            Gender: '.$gender.' '.PHP_EOL.'
            Email: '.$email.' '.PHP_EOL.'
            Phone: '.$phone.' '.PHP_EOL.'
            Region: '.$regions.' '.PHP_EOL.'
            Wines: '.myWines().' '.PHP_EOL.'
            Comments: '.$comments.' '.PHP_EOL.'
            ';
    
            $headers = array(
                'From' => 'noreply@email.com',
                'Reply-to' => ''.$email.''
            );
    
            // mail($to, $subject, $body, $headers);
            header('Locaton: thx.php');
        }
    
    } // end of server request 

?>