<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['meek'] && $_POST['stuff'])) {
        echo 'its empty';
    }

    if (isset($_POST['meek'])) {
        $thing = 'eeeee';
    }

    if (isset($_POST['stuff'])) {
        $thing = 'sdfsa';
    }
}
?>

<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>form 1 emailable form</title>

</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
        <fieldset>
            <label for="meek">Name</label>
            <input type="text" name="meek">

            <label for="stuff">Stuff</label>
            <input type="text" name="stuff">

            <input type="submit" value="SEND">

            <p><a href="">RESET</a></p>
        </fieldset>
    </form>

    <?php echo $thing ;?>

</body>

</html>