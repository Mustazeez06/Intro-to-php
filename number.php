<?php
$num = 6565;
var_dump($num);

$float = 10.365;
var_dump($float);

$myNum = 5895;
var_dump(is_int($myNum));

// checking for finite and infinite numbers
// is_finite();
// is_infinite();

// not a number

$nan = acos(8);
var_dump($nan);


//php casting strings and floats to integers
$y = 23465.768;
$ca_int = (int)$y;
echo $ca_int;

// use \n as a string to make a line break like this

echo (' ');
echo (' ');
echo (' ');
echo (' ');

// string to int
$z = '2346.768';
$ca_int2 =(int)$z;
echo $ca_int2;


?>