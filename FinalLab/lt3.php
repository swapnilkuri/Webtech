<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

echo "Numbers from 1 to 20 using a for loop:<br>";
for ($i = 1; $i <= 20; $i++) {
    echo $i . "<br>";
}

echo "<br>";


echo "Even numbers from 1 to 20 using a while loop:<br>";
$i = 2; 
while ($i <= 20) {
    echo $i . "<br>";
    $i += 2; 
}

echo "<br>";


$fruits = array(
    "apple" => "red",
    "banana" => "yellow",
    "cherry" => "red",
    "orange" => "orange",
    "kiwi" => "green"
);


echo "Fruit names and their colors:<br>";
foreach ($fruits as $fruit => $color) {
    echo "The color of $fruit is $color.<br>";
}

echo "<br>";


echo "First 5 numbers using a loop with a break statement:<br>";
for ($i = 1; $i <= 20; $i++) {
    echo $i . "<br>";
    if ($i == 5) {
        break; 
    }
}
?>

</body>
</html>