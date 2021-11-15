<?php 
include('config.php');
include('includes/header.php'); ?>

    <!-- START of wrapper //////////////////////////////////////////////// -->
<div id="wrapper">

    <main> <!-- START of main section //////// -->
        <h1><?php echo $headline; ?></h1>

        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
          dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen 
          book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>

        <h2>Please fill out our form!</h2>

        <?php include('includes/form.php'); ?>

        <!-- insert the form for HW here -->
    </main>

    <aside> <!-- START of aside section //////// -->
        <h3>Tell us your favorite Magic set</h3>

        <img src="images/magicCards.jpg" alt="cards">
    </aside>

<?php include('includes/footer.php'); ?>