<?php
// the if statement
// LOGIC - if the tempurature is less than 90 degress all it well. else its going to be hot

$temp = 90;

if($temp <= 91) {
echo 'not that hot';
} else {
echo 'it\'s a scorcher';
}
echo '<br>';

// we are going to extend the if statement, with an false statement
$temp = 84;

if($temp <= 78) {
echo 'It is liveable';
} 
else if($temp <= 85) {
echo 'It\'s getting hotter';
} 
else {
echo 'It\'s really hot';
}

echo '<br>';

//fun with logic 
// if my sales are over 800,000 i will make 10 percent bonus of base salary
// if my sales are greater or equal to 600,000 i will make a bonus of 5%

$sales = 599000;
$salary = 200000;

if($sales >= 800000) {
    $salary *= 1.10;
    echo $salary;
} 
else if($sales >= 600000) {
    $salary *= 1.05;
    echo $salary;
} 
else {
    echo $salary;
}
