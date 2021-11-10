<?php

// NAVIGATION section -------------------------------------------------------------

// defining the nav associative array
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

?>