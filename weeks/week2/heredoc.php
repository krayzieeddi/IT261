<?php
// using the heredoc

$book = 'Handmaid\'s Tale';
$author = 'Margaret Atwood';
$character = 'June';
$actor = 'Elizabeth Moss';

$content = <<<HAND
My favorite book is $book, written by $author, and is presently a miniseris on HULU. HULU's viewing audience is 
extremely excited about the miniseries and looks forward to the 5th season of the award winning $book

$actor's rendition as $character is right on! Once this content is corrected, it will display properly; my content is displayed in orange,
and my variables are not displayed in black!!! As a matter of fact, everything is displayed in red.
HAND;

echo $content;