<?php 
include('config.php');
include('includes/header.php'); 

// gallery 

// settting up the associative array for the pictures and table data
$sigmar['stormcast'] = 'storm_The eternal protectors.';
$sigmar['maggotkin'] = 'maggo_Vile demons from the deep.';
$sigmar['kharadon'] = 'khara_Drawves of the sky.';
$sigmar['seraphon'] = 'serph_Lizard men from the stars.';
$sigmar['soulblight'] = 'soulb_The undead never fades.';
// $name ..................... $image
// $key  ..................... $value
?>

    <!-- START of wrapper //////////////////////////////////////////////// -->
<div id="wrapper">

    <main> <!-- START of main section //////// -->
        <h1><?php echo $headline; ?></h1>

        <table>
        <!-- start of for each loop -->
        <?php foreach ($sigmar as $name => $image) : ?>
        <tr>
            <td><img src="images/<?php echo $name ;?>.JPG" alt="<?php echo str_replace('_', ' ', $name) ;?>"></td>
            <td><?php echo '<p><b>'.str_replace('_', ' ', $name).'</b></p>' ;?></td>
            <td><?php echo '<p>'.substr($image, 6).'</p>' ;?></td>
        </tr>
        <?php endforeach ; ?>
        <!-- end of for each loop -->
    </table>

        <!-- insert the form for HW here -->
    </main>

    <aside> <!-- START of aside section //////// -->
        <h3>Our Aside for our form</h3>
    </aside>

<?php include('includes/footer.php'); ?>