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

        <h1 id="logo"><a href="index.php">Logo</a></h1> <!-- INSERT IMG HERE LATER -->

        <nav><!-- START of nav section //////////////////////// -->
            <ul>
                <?php echo myNav($nav);?>
            </ul>
        </nav>

        </div>  <!-- END header inner div ////// -->
    </header>