<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

function sum($a, $b) {
    return $a + $b;
}


echo "Sum of 5 and 10: " . sum(5, 10) . "<br>";
echo "Sum of 7 and 3: " . sum(7, 3) . "<br>";

echo "<br>";


function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}


echo "Factorial of 5: " . factorial(5) . "<br>";
echo "Factorial of 7: " . factorial(7) . "<br>";

echo "<br>";


function is_prime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}


$numbers = [2, 4, 7, 10, 13];

foreach ($numbers as $number) {
    if (is_prime($number)) {
        echo "$number is a prime number.<br>";
    } else {
        echo "$number is not a prime number.<br>";
    }
}
?>

</body>
</html>