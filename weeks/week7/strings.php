<?php
// sub strings and replace

$statement = 'Presently, I am reading the Looming Tower';
echo substr($statement, 0);

echo '<br>';
echo $statement;

echo '<br>';
echo substr($statement, 0, 4);

echo '<br>';
echo substr($statement, 0, 14);

echo '<br>';
// the negative number starts counting from the back 
echo substr($statement, -7);

echo '<br>';
echo substr($statement, -15, 5);

// the other fucntion will be string replace

$statement2 = 'Hulu\'s rendiiton of the Looming Tower is base on the book, the Looming Tower.';

echo str_replace('the', 'The', $statement2);