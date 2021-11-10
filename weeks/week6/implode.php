<?php
// my implode wine funcitons
// cab, merlot, malbec, syrad and blend

$wines = array(
    'cab',
    'merlot',
    'malbec',
    'syrad',
    'blend'
);

$myWines = implode(', ', $wines);
echo $myWines;