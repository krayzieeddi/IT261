<?php 
include('config.php');
include('includes/header.php'); ?>

    <!-- START of wrapper //////////////////////////////////////////////// -->
   <div id="wrapper">

    <div id="hero">  <!-- START of hero div section //////// -->
    <?php randomPic($selected_image, $i, $photos) ;?>

        <h2><pre>
            <br>
            function randomPic($selected_image, $randNum, $photos) {

            }
        </pre></h2>
    </div> <!-- END of div hero -->

    <main> <!-- START of main section //////// -->
      <h1><?php echo $headline; ?></h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
          dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen 
          book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially 
          unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
          and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </main>

    <aside> <!-- START of aside section //////// -->

    </aside>

<?php include('includes/footer.php'); ?>