<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>form 1 emailable form</title>
<link href="css/styles" type="text/css" rel="stylesheet">
<link href="css/styles_form.css" type="text/css" rel="stylesheet">

</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
        <fieldset>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">
            <span class="error"><?php echo $first_name_Err ;?></span>

            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">
            <span class="error"><?php echo $last_name_Err ;?></span>

            <label for="email">Email</label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
            <span class="error"><?php echo $email_Err ;?></span>

            <label for="phone">Phone number</label>
            <input type="text" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">
            <span class="error"><?php echo $phone_Err ;?></span>

            <label for="gender">Gender</label>
                <ul>
                    <li>
                        <input type="radio" name="gender" value="female" 
                        <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"';?>
                        >Female
                    </li>

                    <li>
                        <input type="radio" name="gender" value="male"
                        <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"';?>
                        >Male
                    </li>

                    <li>
                        <input type="radio" name="gender" value="other"
                        <?php if(isset($_POST['gender']) && $_POST['gender'] == 'other') echo 'checked="checked"';?>
                        >Other
                    </li>
                </ul>
            <span class="error"><?php echo $gender_Err ;?></span>

            <label for="wines">Favortie Wines</label>
                <ul> <!-- the [] allows for muliple options to be checked off -->
                    <li>
                        <input type="checkbox" name="wines[]" value="cab"
                        <?php if(isset($_POST['wines']) && in_array('cab', $_POST['wines'])) echo 'checked="checked" ' ;?>
                        >Cabernet
                    </li>

                    <li>
                        <input type="checkbox" name="wines[]" value="merlot"
                        <?php if(isset($_POST['wines']) && in_array('merlot', $_POST['wines'])) echo 'checked="checked" ' ;?>
                        >Merlot
                    </li>

                    <li>
                        <input type="checkbox" name="wines[]" value="syrah"
                        <?php if(isset($_POST['wines']) && in_array('syrah', $_POST['wines'])) echo 'checked="checked" ' ;?>
                        >Syrah
                    </li>

                    <li>
                        <input type="checkbox" name="wines[]" value="malbec"
                        <?php if(isset($_POST['wines']) && in_array('malbec', $_POST['wines'])) echo 'checked="checked" ' ;?>
                        >Malbec
                    </li>

                    <li>
                        <input type="checkbox" name="wines[]" value="blend"
                        <?php if(isset($_POST['wines']) && in_array('blend', $_POST['wines'])) echo 'checked="checked" ' ;?>
                        >Red Blend
                    </li>
                </ul>
            <span class="error"><?php echo $wines_Err ;?></span>

            <label for="regions">Regions</label>
                <select name="regions">
                    <option value="" NULL
                    <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected="unselected"' ;?>
                    >Select One</option>

                    <option value="nw"
                    <?php if(isset($_POST['regions']) && $_POST['regions'] == 'nw') echo 'selected="selected"' ;?>
                    >NorthWest</option>

                    <option value="sw"
                    <?php if(isset($_POST['regions']) && $_POST['regions'] == 'sw') echo 'selected="selected"' ;?>
                    >SouthWest</option>

                    <option value="mw"
                    <?php if(isset($_POST['regions']) && $_POST['regions'] == 'mw') echo 'selected="selected"' ;?>
                    >MidWest</option>

                    <option value="ne"
                    <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ne') echo 'selected="selected"' ;?>
                    >NorthEast</option>

                    <option value="se"
                    <?php if(isset($_POST['regions']) && $_POST['regions'] == 'se') echo 'selected="selected"' ;?>
                    >SouthEast</option>

                    <option value="so"
                    <?php if(isset($_POST['regions']) && $_POST['regions'] == 'so') echo 'selected="selected"' ;?>
                    >South</option>
                </select>
            <span class="error"><?php echo $regions_Err ;?></span>

            <label for="comments">Comments</label>
            <textarea name="comments"><?php  if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
            <span class="error"><?php echo $comments_Err ;?></span>

            <label for="privacy">Privacy</label>
                <ul>
                    <li>
                        <input type="radio" name="privacy" value="agree"
                        <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked"';?>
                         >I agree
                    </li>
                </ul>
            <span class="error"><?php echo $privacy_Err ;?></span>

            <input type="submit" value="SEND IT">

            <p><a href="">Reset</a></p>

        </fieldset> <!-- end of fieldset //////////////// -->
    </form>

</body>
</html>