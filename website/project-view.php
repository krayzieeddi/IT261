<?php
// people-view.php

include('config.php');

// if isset GET['today] 

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
}
else {
    header('Location: project.php');
}

$sql = 'SELECT * FROM magic WHERE person_id = '.$id.'';

// we need to connect to the database using mysql_connect() function
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result grabbing the entire target table
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {

    // time for while loop -- and the while loop will return the array from people table
    while ($row = mysqli_fetch_assoc($result)) { 

        //we are not echoing here just assigning row first name to variable first name
        $first_name = stripslashes($row['first_name']);

        $last_name = stripslashes($row['last_name']);

        $land = stripslashes($row['land']);

        $blurb = stripslashes($row['blurb']);

        $feedback = '';
    } // ending while
    

} // ending if statement
else {
    $feedback = 'Something is not working';
}

include('includes/header.php');

?>

<!-- HTML line -->
<div id="wrapper">
<main>
<h1>Welcome to <?php echo $first_name ;?>'s page!</h1>

<?php  
    if ($feedback == '') {
        echo '<ul>';
        echo '<li><b>First Name: </b>'.$first_name.'</li>';
        echo '<li><b>Last Name: </b>'.$last_name.'</li>';
        echo '<li><b>Land: </b>'.$land.'</li>';
        echo '</ul>';

        echo '<p>Return back to the <a href="project.php">project page!</a></p>';
    }

?>

</main>

<aside>
<?php
if ($feedback == '')    {
    echo '<img class="center" src="images/p'.$id.'.JPG" alt="'.$first_name.'">';
    echo '<p class ="blurb">'.$blurb.'</p>';
}
?>
</aside>

</div> 
<!-- end of wrapper div -->

<?php
mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');