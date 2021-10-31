<?php
// begginning of switch HW
// this if else statement is to get the current day of the user
if (isset($_GET['today'])) {
    $today = $_GET['today'];
}
else {
    $today = date('l');
}

// this will just define the current page that the user will be on
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// defining the nav array
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Garllery';

// start of switch statement for web pages
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

?>

<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="css/styles.css" type="text/css" rel="stylesheet">

<title><?php echo $title; ?></title>

</head>

<body class ="<?php echo $body; ?>"> <!-- START of body /////////////////////////////////////////// --> 
    <header> <!-- START of header section //////////// -->
        <div class="header-inner">

        <a href="index.php"> <h1 id="logo">Logo</h1> </a> <!-- INSERT IMG HERE LATER -->

        <nav><!-- START of nav section //////////////////////// -->
            <!-- <ul> 
                <li> <a href="">Home</a> </li>
                <li> <a href="">About</a> </li>
                <li> <a href="">Daily</a> </li>
                <li> <a href="">Project</a> </li>
                <li> <a href="">Contact</a> </li>
                <li> <a href="">Gallery</a> </li>
            </ul> -->

            <ul>
                <?php
                    foreach($nav as $key => $value) {
                        // echo '<li><a href="'.$key.'">'.$value.'</a></li>';
                        if (THIS_PAGE == $key) {
                            echo '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
                        }
                        else {
                            echo '<li><a href="'.$key.'">'.$value.'</a></li>';
                        }
                    }
                ?>
            </ul>
        </nav>

        </div>  <!-- END header inner div ////// -->
    </header>