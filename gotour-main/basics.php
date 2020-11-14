<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">This is my first php website</div>
    <?php

echo "Hello world and this is used and made by php";
echo "<br>";
?>
<?php
define('Pay',33);
$var1=25;
$var2=45;


//OPERSTORS IN PHP
// Airthmetic operator
echo "<br>";
echo "The value of var1+var2 is ";
echo $var1 + $var2;
echo "<br>";
echo "The value of var1-var2 is ";
echo $var1 - $var2;
echo "<br>";
echo "The value of var1*var2 is ";
echo $var1 * $var2;
echo "<br>";
echo "The value of var1/var2 is ";
echo $var1 / $var2;
echo "<br>";

// Assignment operator

$newvar=$var1;
echo "<br>";
echo "New var ";
echo $newvar;

$newvar *=2;
echo "<br>";
echo $newvar;
echo "<br>";
// Comaprison operator
// increment /decrement  operator
// logical operator

echo var_dump($newvar);

echo Pay;
//Data types
// int 
// string 
// float
// bool
// array
// object
echo "<br>";
$str = "This is string of new world";
echo $str;
echo "<br>";
echo var_dump($str);
echo "<br>";


?>


</body>
</html>