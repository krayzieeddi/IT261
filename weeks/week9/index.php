<?php
// index.php page for login exercise

// this index page is home page of website when user logs on
// also after creating this index.php you will not be able to access unless you login

session_start();

include('config.php');

// if the user has not logged in correctly they will be directed to the login page
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must log in first';
    header('Location:login.php');
}

// when user logs out the session will be deleted and directeb back to login page
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php');

// notification message
// if successful - welcome the end user

if (isset($_SESSION['success'])) :?>

    <div class="success">
        <h3>
            <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
            ?>
        </h3>
    </div> <!-- end div success -->
    <?php 
    endif; 

    if (isset($_SESSION['username'])) : ?>

        <div class="welcome-logout">
            <h3>
                Hello 
                <?php echo $_SESSION['username']; ?>
            </h3>

            <p><a href="index.php?logout='1' ">Log out</a></p>
        </div> <!-- end of welcome logout div -->
    <?php endif ; ?>
</header>

<!-- start of wrapper ////////////////////////////////////// -->
<div id="wrapper">

    <h1>Welcome to the home page</h1>

</div> <!-- end of wrapper -->

<?php include('includes/footer.php'); ?>