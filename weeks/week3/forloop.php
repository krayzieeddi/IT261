<?php
// for loops

for ($x = 0; $x <= 21; $x+=3) {  
    echo "The number is: $x <br>";
}

// is a for loop for our famous celcius - far converter

// do not call out the celcius variable outside of the loop
for ($celcius = 0; $celcius <= 100; $celcius++) {  
    $far = ($celcius * 9/5) + 32;
    $friendly_far = floor($far);
    echo '<b>Farenheit: </b>'.$friendly_far.'<b> Celcius: </b> <span style="color:red; font-weight:bold;">'.$celcius.' </span><hr>';
}

echo '<br';
// kilometer and we have miles
// 1.6 km = 1mile

for ($km = 0; $km <= 10; $km++)  {
    $miles = $km * 0.6;
    echo '<b>Kilometer: </b>'.$km.' <b> Miles: </b>'.$miles.'<br>';
}
