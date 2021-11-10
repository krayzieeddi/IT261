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
            $myReturn .= '<li><a href="'.$key.'" class="current">'.$value.'</li>'; 
        }
        else {
            $myReturn .= '<li><a href="'.$key.'">'.$value.'</li>';
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

// emailable form php

?>