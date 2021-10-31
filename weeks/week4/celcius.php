<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>week 4 - celcius form</title>
<link href="week4_styles.css" type="text/css" rel="stylesheet">

</head>

<body>
    <form action="
        <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>
    " method="post">

        <fieldset>
            <legend>Our Celcius Form</legend>

            <label for="cel">Enter your Celcius Value!</label>
            <input type="number" name="cel">

            <input type="submit" value="convert it!">

            <p><a href="">RESET</a></p>

        </fieldset>
    </form>

    <?php // start oof php for celcius calcutions post results
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if (isset($_POST['cel'])) {
                $cel = $_POST['cel'];
                $cel_int = intval($cel);
                $far = ($cel_int * 9/5) + 32;
                $freindly_far = number_format($far, 0);

                if ($cel == NULL) {
                    echo '<h2>Please fill out your Celcius value</h2>';
                } 
                else if ($far <= 32) {
                    echo '<p> '.$freindly_far.' degrees and it is pretty cold!</p>';
                }
                else if ($far <= 40) {
                    echo '<p> '.$freindly_far.' degrees and it is not as cold!</p>';
                }
                else if ($far <= 50) {
                    echo '<p> '.$freindly_far.' degrees and it is getting warmer!</p>';
                }
                else if ($far <= 60) {
                    echo '<p> '.$freindly_far.' degrees and I\'m liking it!</p>';
                }
                else if ($far <= 70) {
                    echo '<p> '.$freindly_far.' degrees and I\'m really liking it!</p>';
                }
                else if ($far <= 80) {
                    echo '<p> '.$freindly_far.' degrees and I\'m going swimming!</p>';
                }
                else if ($far <= 95) {
                    echo '<p> '.$freindly_far.' degrees and it\'s getting hot!</p>';
                }
                else {
                    echo '<p>It\'s a cooker!</p>';
                }

            } // end of isset

        } // end server post
    ?>
</body>
</html>