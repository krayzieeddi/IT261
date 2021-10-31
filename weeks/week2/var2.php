<?php 
// more variables, arithmetic and additional set functions

$a = '20';
$b = '30';
$c = $a + $b;
echo $c;
echo '<br>';

$a = '700';
$b = '330';
$c = $a - $b;
echo $c;
echo '<br>';

$a = '50';
$b = '5';
$c = $a * $b;
echo $c;
echo '<br>';

$money = 100;
$money /= 7;
echo $money;
echo '<br>';

// number functions for php
$money = 100;
$money /= 7;
$friendly_money = number_format($money,2); // number_format() function to round digits
echo $friendly_money;
echo '<br>';

$friendly_money = floor($money); // floor() to round down 
echo $friendly_money;
echo '<br>';

$friendly_money = ceil($money); // ceil() to round up 
echo $friendly_money;
echo '<br>';

// logic and calculations
// circumference of a circle circumference = 2 * pie * radius
$radius = '10';
$pie = 3.14;
$circumference = (2 * $pie) * $radius;
echo $circumference;
echo '<br>';

// always think logic first 
// 22 degress celcius = ? in far?
// far = (C * 9.5) + 32
$celcius = 14;
$far = ($celcius * 9.5) + 32;
$friendly_far = floor($far);

echo ''.$friendly_far.' degrees';
echo '<br>';

// logic and the exchange rate
// canadian = 100
// exhange rate is 0.79
$canada = 1433;
$canada *= 0.79;
echo $canada;

echo '<p>I have <b>'.$canada.'</b> American dollars!</p>'; // can add html tags within the strings

$canada = 1433;
$canada *= 0.79;
$friendly_canada = floor($canada);

echo '<p>I have <b>'.$friendly_canada.'</b> American dollars!</p>'; // can add html tags within the strings
