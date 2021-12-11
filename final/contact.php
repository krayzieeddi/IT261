<?php 

include('includes/header.php'); ?>

    <!-- START of wrapper //////////////////////////////////////////////// -->
<div id="wrapper">

    <main> <!-- START of main section //////// -->
        <h1><?php echo $headline; ?></h1>

        <p>Let us know about you!</p>

        <h2>Please fill out our form!</h2>

        <?php include('includes/form.php'); ?>

        <!-- insert the form for HW here -->
    </main>

    <aside> <!-- START of aside section //////// -->
        <h3>Tell us your favorite Magic set</h3>

        <img src="images/magicCards.jpg" alt="cards">
    </aside>

<?php include('includes/footer.php'); ?>