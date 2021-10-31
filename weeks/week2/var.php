<?php
// var.php weekly exercise

$name = 'edwin';
$weather = 'Today is a sunny day';
$body_temp = 98.6;

echo $name;
echo 'My name is $name'; // if you use single quotes around the a variable, the variable will not display
echo '<br>'; // html break line new space
echo "My name is $name"; // use double quotes to have variables in the string show up as the variable
echo '<br>';

echo 'My name is '.$name.' '; // surround the variable with peroids and end with full single quote to concatenate
echo '<br>';
echo $weather;
echo '<br>';
echo $body_temp;
echo '<br>';
echo 'The normal body temperture is '.$body_temp.' and all is well';
echo '<br>';
$name = 'Bob';
echo $name;
echo '<br>';
$x = 20;
$y = 5;
echo $x;
echo '<br>';
$z = $x + $y;
echo $z;
echo '<br>';
$z = $x * $y;
echo $z;
echo '<br>';

// continue with our name
$first_name = 'Edwin';
$last_name = 'Ho';
echo '<br>';
echo ' '.$first_name.' '.$last_name;
echo '<br>';
echo $first_name.' '.$last_name;
echo '<br>';
echo 'Here are the names with a single\'s quote! '.$first_name.' '.$last_name.' ';
// use the \ escape character to use ' within the string itself
echo '<br>';
echo "Here are the names with a double's quote! $first_name $last_name";
echo '<br>';
$name = 'Edwin';
$name .= ' Ho'; // period with the = sign ( .= ) means concatenation of new assginment to old one
echo $name;
echo '<br>';

$x = 20;
$x *= 2;
echo $x;
echo '<br>';

$x = 120;
$x *= 0.09;
echo $x;
echo '<br>';

// our first function - number_format()
$x = 137;
$x /= 4;
// result is 34.25
$friendly_x = number_format($x, 0); // rounding number function
echo $friendly_x;
echo '<br>';

// our second function - the date function
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';

// arrays
// method 1 to add to array
$fruit[] = 'orange';
$fruit[] = 'banana';
$fruit[] = 'apples';
$fruit[] = 'cherries';

// method 2 for arrays
$fruit = array(
    'orange',
    'banana',
    'apples',
    'cherries'
);

// method 3 for arrays
$fruit = [
    'orange',
    'banana',
    'apples',
    'cherries'
];

// cannot echo an array
echo '<br>';

print_r($fruit); // use the print_r() function to print out array technical info
echo '<br>';

var_dump($fruit); // var_dump() prints out even more array info
echo '<br>';

echo $fruit[3]; // you can echo an indexed option within an array
echo '<br>';

//another array in the world of websites
$nav[] = 'Home';
$nav[] = 'About';
$nav[] = 'Daily';
$nav[] = 'Contact';
$nav[] = 'Gallery';

echo $nav[0];
echo '<br>';

// associative array
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallary.php'] = 'Gallery';

// 'index.php' is key of array and 'Home' is the value
// key value relationship
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

echo '<pre>'; // <pre> preview opening and closing tag
var_dump($nav);
echo '</pre>';

echo '<br>';

$show = 'The Crown';
$show_actor = 'Olivia Colman';
$show_genre = 'Historical Fiction';

echo 'My favorite series during 2020 was '.$show.' starring, '.$show_actor.' and it is a '.$show_genre.' ';