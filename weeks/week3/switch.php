<?php
// class coffee exericise
// it today is thursday, it will be pumpkin latte day
// we will start with the isset() function
// then we will introduce our first GLOBAL variable 
// our switch

// isset function is a boolean function to see if the variable is set up

// $variable = 'Life is good!';

// if (isset($variable)) {
//     echo 'Yippy Skippy!';
// }
// else {
//     echo 'Not';
// }

// starting the switch
// if something is set, $today, then all is well
// else, today is TODAY

// GLOBAL VARIABLES are capitalzed and start with $_

// this if else statement is to get the current day of the user
if (isset($_GET['today'])) {
    $today = $_GET['today'];
}
else {
    $today = date('l');
}

// switch

switch ($today) {
    case 'Thursday' :
        $coffee = '<h2>Thursday is our Cap Day!</h2>';
        $pic = 'cap.jpg';
        $alt = 'Cappacino';
        $content = 'A <b>cappuccino</b> is an espresso-based coffee drink that originated in Italy, and is prepared with steamed milk foam. 
        Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon 
        or chocolate powder.';
        break;

    case 'Friday' :
        $coffee = '<h2>Friday is our Americano Day!</h2>';
        $pic = 'americano.jpg';
        $alt = 'americano';
        $content = 'Caffè Americano is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to,
         but different flavor from, traditionally brewed coffee. The strength of an Americano varies with the number of shots of espresso 
         and the amount of water added.';
        break;

    case 'Saturday' :
        $coffee = '<h2>Saturday is our Regular Joe Day!</h2>';
        $pic = 'coffee.png';
        $alt = 'coffee';
        $content = 'Coffee is a brewed drink prepared from roasted coffee beans, the seeds of berries from certain Coffea species. From the coffee 
        fruit, the seeds are separated to produce a stable, raw product: unroasted green coffee.';
        break;

    case 'Sunday' :
        $coffee = '<h2>Sunday is our Green tea Day!</h2>';
        $pic = 'green-tea.jpg';
        $alt = 'green tea';
        $content = '<b>Green tea</b> is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone 
        the same withering and oxidation process used to make oolong teas and black teas. Green tea originated in China, 
        and since then its production and manufacture has spread to other countries in East Asia.';
        break;
}

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>switch classwork exercise</title>
<style>
#wrapper {
    width:940px;
    margin:20px auto;
}

</style>

</head>

<body>
<div id = "wrapper">

    <h1>My wonderful switch classwork exercise</h1>

    <?php echo $coffee; ?>

    <img src="images/<?php echo $pic ?>" alt="<?php echo $alt ?>">

    <p><?php echo $content; ?></p>

    <h2>Check out our daily specials</h2>

    <ul>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
    </ul>

</div> <!-- end wrapper -->
</body>
</html>