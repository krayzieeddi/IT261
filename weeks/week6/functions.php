<?php
// functions

function sayHello() {
    echo 'This is my say hello content';
}

sayHello();

echo '<br>';

function sayHello2($name) {
    echo 'Hello '.$name.'';
}
sayHello2('Edwin');
echo '<br>';
sayHello2('Sam');
echo '<br>';
sayHello2('Tryell');
echo '<br>';
sayHello2('Sara');
echo '<br>';

function sayHello3($name, $age) {
    echo 'My name is '.$name.' and I am '.$age.' years old!';
}
sayHello3('Bob', 89);
echo '<br>';
sayHello3('tim', 45);
echo '<br>';
sayHello3('Sara', 23);
echo '<br>';
sayHello3('Kim', 69);
echo '<br>';

function cube($n) {
    $cubing = $n * $n * $n;
    echo $cubing;
}
cube(5);
echo '<br>';

function celcius_converter($temp) {
    $far = ($temp * 9/5) + 32;
    return $far;
}
$far = celcius_converter(40);
echo ''.$far.' degrees';
echo '<br>';

function area_volume($value1, $value2, $value3) {
    $area = $value1 * $value2;
    $volume = $value1 * $value2 * $value3;

    return array($area, $volume);
}

// $myReturn = area_volume(10, 5, 10);

// echo '<b>Area: </b>'.$myReturn[0].' <br>';
// echo '<b>Volume: </b>'.$myReturn[1].' <br>';

list($myArea, $myVolume) = area_Volume(12, 10, 6);
echo '<b>Area: </b>'.$myArea.' ';
echo '<b>Volume: </b>'.$myVolume.' ';