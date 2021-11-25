<?php
// errors page
// if we have more than 0 errors then we display error messages
// cannot echo array in an array so we will use the foreach loop

if (count($errors) > 0) :?>

<div class="error">
    <?php foreach($errors as $error) : ?>
    <p><?php echo $error; ?> </p>
    <?php endforeach; ?>
</div>

<?php endif; ?>
