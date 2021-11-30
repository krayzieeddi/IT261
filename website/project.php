<?php

// config-file
// credentials
// this page only works on the live host server, not the local server

include('config.php');
include('includes/header.php');

// we need to grab our table and assgin to a variable $sql using mysql
?>

<div id="wrapper">
<main>
<h1><?php echo $headline; ?></h1>

<?php
$sql = 'SELECT * FROM magic';

// we need to connect to the database using mysql_connect() function
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result grabbing the entire target table
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// time for the if statement ---- if we have more than 0 rows .. then good
if (mysqli_num_rows($result) > 0) {

    // time for while loop -- and the while loop will return the array from people table
    while ($row = mysqli_fetch_assoc($result)) {
        // this below line uses the associative array result and the key word for sql query in url
        echo '<h3><p>For more information about '.$row['first_name'].', please click 
        <a href="project-view.php?id='.$row['person_id'].'">here!</a></p></h3>';

        echo '<ul>';
        echo '<li>'.$row['first_name'].'</li>';
        echo '<li>'.$row['last_name'].'</li>';
        echo '<li>'.$row['land'].'</li>';
        echo '</ul>';
        echo '<hr>';
    } // end of inner while
} // end of if statement
else {
    echo 'Huston, we have a problem';
}

mysqli_free_result($result);
mysqli_close($iConn);

?>

</main>

<aside>
    <h3>My mystery aside</h3>
</aside>

</div> 
<!-- end of wrapper div -->

<?php
include('includes/footer.php');