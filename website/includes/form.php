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

        <label for="cardSet">Favortie Magic Card Set</label>
            <ul> <!-- the [] allows for muliple options to be checked off -->
                <li>
                    <input type="checkbox" name="cardSet[]" value="dominion"
                    <?php if(isset($_POST['cardSet']) && in_array('dominion', $_POST['cardSet'])) echo 'checked="checked" ' ;?>
                    >Dominion Set
                </li>

                <li>
                    <input type="checkbox" name="cardSet[]" value="innstrad"
                    <?php if(isset($_POST['cardSet']) && in_array('innstrad', $_POST['cardSet'])) echo 'checked="checked" ' ;?>
                    >Innstrad Crison Vow
                </li>

                <li>
                    <input type="checkbox" name="cardSet[]" value="strixhaven"
                    <?php if(isset($_POST['cardSet']) && in_array('strixhaven', $_POST['cardSet'])) echo 'checked="checked" ' ;?>
                    >Strixhaven School of Arcanium
                </li>

                <li>
                    <input type="checkbox" name="cardSet[]" value="war of spark"
                    <?php if(isset($_POST['cardSet']) && in_array('war of spark', $_POST['cardSet'])) echo 'checked="checked" ' ;?>
                    >War of the Spark
                </li>

                <li>
                    <input type="checkbox" name="cardSet[]" value="zendikar"
                    <?php if(isset($_POST['cardSet']) && in_array('zendikar', $_POST['cardSet'])) echo 'checked="checked" ' ;?>
                    >Zendikar Rising
                </li>
            </ul>
        <span class="error"><?php echo $cardSet_Err ;?></span>

        <label for="localStore">Your Local Store</label>
            <select name="localStore">
                <option value="" NULL
                <?php if(isset($_POST['localStore']) && $_POST['localStore'] == NULL) echo 'selected="unselected"' ;?>
                >Select One</option>

                <option value="zulu"
                <?php if(isset($_POST['localStore']) && $_POST['localStore'] == 'zulu') echo 'selected="selected"' ;?>
                >Zulu's board and cafe</option>

                <option value="phoenix"
                <?php if(isset($_POST['localStore']) && $_POST['localStore'] == 'phoenix') echo 'selected="selected"' ;?>
                >Phoenix comic and board games</option>

                <option value="mox"
                <?php if(isset($_POST['localStore']) && $_POST['localStore'] == 'mox') echo 'selected="selected"' ;?>
                >Mox boardd game house</option>
            </select>
        <span class="error"><?php echo $localStore_Err ;?></span>

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
