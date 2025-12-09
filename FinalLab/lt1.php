<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$stringVar = "Hello, world!";
$intVar = 10;
$floatVar = 5.5;
$boolVar = false;


$number1 = 8;
$number2 = 4;


$sum = $number1 + $number2;
echo "Sum: " . $sum . "<br>";


$subtraction = $number1 - $number2;
echo "Subtraction: " . $subtraction . "<br>";


$multiplication = $number1 * $number2;
echo "Multiplication: " . $multiplication . "<br>";


$division = $number1 / $number2;
echo "Division: " . $division . "<br>";


echo "Sum using echo: " . $sum . "<br>";
print "Sum using print: " . $sum . "<br>";

// 4. Use var_dump() to display the type and value of each variable
echo "Type and value of string variable: ";
var_dump($stringVar);
echo "<br>";

echo "Type and value of integer variable: ";
var_dump($intVar);
echo "<br>";

echo "Type and value of float variable: ";
var_dump($floatVar);
echo "<br>";

echo "Type and value of boolean variable: ";
var_dump($boolVar);
echo "<br>";

?>

</body>
</html>