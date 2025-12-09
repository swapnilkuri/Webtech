<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$temperature = 30; 


if ($temperature < 10) {
    echo "It's cold.<br>";
} elseif ($temperature >= 10 && $temperature <= 25) {
    echo "It's warm.<br>";
} else {
    echo "It's hot.<br>";
}


$day = 3; 
switch ($day) {
    case 1:
        echo "Today is Monday.<br>";
        break;
    case 2:
        echo "Today is Tuesday.<br>";
        break;
    case 3:
        echo "Today is Wednesday.<br>";
        break;
    case 4:
        echo "Today is Thursday.<br>";
        break;
    case 5:
        echo "Today is Friday.<br>";
        break;
    case 6:
        echo "Today is Saturday.<br>";
        break;
    case 7:
        echo "Today is Sunday.<br>";
        break;
    default:
        echo "Invalid day.<br>";
        break;
}


if (!is_numeric($temperature)) {
    echo "Invalid temperature value.<br>";
} else {
    echo "Valid temperature.<br>";
}

if ($day < 1 || $day > 7) {
    echo "Invalid day value.<br>";
} else {
    echo "Valid day value.<br>";
}
?>

</body>
</html>