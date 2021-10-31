<?php
// our foreach loop

// establishing the array
$show = array( 
    'Name' => 'Handmaid\'s Tale',
    'Actor' => 'Elizabeth Moss',
    'Genre' => 'Drama',
    'Author' => 'Margaret Atwood',
    'Year' => '1987'
);

// another way of establishing the same array
$show['Name'] = 'Handmaid\'s Tale'; 
$show['Actor'] = 'Elizabeth Moss';
$show['Genre'] = 'Drama';
$show['Author'] = 'Margaret Atwood';
$show['Year'] = '1987';



$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['projects.php'] = 'Projects';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// end of first php
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>For each loop</title>
<style>
#wrapper {
    width:580px;
    margin:20px auto;
}
nav li {
    list-style-type:none;
}
nav a {
    color:red;
    font-weight:bold;
    text-decoration:none;
    font-size:1.2em;
    font-family:Verdana, arial, sans-serif;
}

</style>

</head>

<body>
<!-- start wrapper -->
<div id="wrapper">
<h1>Our foreach loops</h1>
<h2>Handmaid's Tale</h2>
<?php
// for each loop that displays the key with its values
foreach($show as $key => $value) {  
    echo '<b> '.$key.'</b>: '.$value.'<br>';
}
?>

<h2>Our navigation</h2>

<nav>
    <ul> <!-- ul tag has to be outside of the php tag -->
        <?php
            // this for each loop will use all the values as linkable links to the key (php files)
            foreach($nav as $key => $value) {
                echo '<li><a href="'.$key.'">'.$value.'  </a></li>';
            }
        ?>
    </ul>
</nav>

</div> <!-- end wrapper -->
</body>
</html>