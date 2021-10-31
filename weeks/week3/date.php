<?php
// the date function

echo date("l jS \of F Y h:i:s A");
echo '<br>';
echo date("H:i");
echo '<br>';

// manually set the time zone
date_default_timezone_set('America/Los_Angeles');
echo date("H:i");
// why did i change the time from 12 hour clock to 24 clock?
// I will use an if/else statement, resulting in a dfferement message based on the time of day
// if the time is less than 11, it morning
// if the time is less than 16, its afternoon
// else its evening
// we need to asign our date to a variable
echo '<br>';

$time = date("H:i");

if($time <= 11) {
    echo '<h2 style="color:yellow;">Good morning, Edwin</h2>';
}
else if($time <= 16) {
    echo '<h2 style="color:ligthblue;">Good afternoon, Edwin</h2>';
}
else {
    echo '<h2 style="color:purple;">Good evening, Edwin</h2>';
}

// can place html elements in our echo