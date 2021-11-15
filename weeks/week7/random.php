<?php
// random php

$dice = rand(1, 6);

echo $dice;

echo '<br>';
$dice1 = rand(1, 6);
$dice2 = rand(1, 6);

echo $dice1;
echo '<br>';
echo $dice2;
echo '<br>';

// if I throw a double I will win

if ($dice1 == $dice2) {
    echo 'I won';
}
else {
    echo 'I did not win';
}

$i = rand(1, 20);
echo $i;
echo '<br>';

// will display our photos randomly

$photos = array(
    'photo1',
    'photo2',
    'photo3',
    'photo4',
    'photo5'
);

$photos[0] = 'pic1';
$photos[1] = 'pic2';
$photos[2] = 'pic3';
$photos[3] = 'pic4';
$photos[4] = 'pic5';

$i = rand(0, 4);
$selected_image = ''.$photos[$i].'.JPG'; 

echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';