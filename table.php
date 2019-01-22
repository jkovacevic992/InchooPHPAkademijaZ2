<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Homework 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="index.html">

    <input type="submit" value="Back">

</form>

<?php


$numbers = $_POST['numbers'];

$array = explode(',', $numbers);

foreach ($array as $value) {
    if (!is_numeric($value) || $value <= 0) {
        echo "You can only enter positive numbers (no letters or negative numbers) separated by comma.";
        exit();


    }
}
$array = array_map('intval', array_filter($array, function ($value) {
    return $value !== '';
}));
$numsToExclude = [];


for ($i = 0; $i <= count($array); $i++) {
    if ($array[$i] % 2 !== 0) {
        $numsToExclude[] = $array[$i];
        }

}

$arithmeticMean = array_sum($array) / count($array);
$array = array_unique(array_values(array_diff($array, $numsToExclude)));

sort($array);


$closestNumber = null;


foreach ($array as $key => $value) {
    if ($value > $arithmeticMean && $value % 2 === 0) {
        $closestNumber = $value;
        break;
    }
}


$squareRootPlusOne = intval(sqrt(max($array))) + 1;

echo "Arithmetic mean: " . $arithmeticMean, "<br/>";
echo "The next even number larger than the arithmetic mean: " . $closestNumber, "<br />";
echo "Square root +1 of the largest even number: " . $squareRootPlusOne, "<br />";

echo "<table>";
$p = 0;
for ($i = 0; $i < $squareRootPlusOne; $i++) {
    echo "<tr>";

    for ($j = 0; $j < $squareRootPlusOne; $j++) {
        ++$p;
        if (in_array($p, $array) && $p === $closestNumber) {

            echo "<td><b>", $p, "</b></td>";
        } else if (in_array($p, $array)) {
            echo "<td>", $p, "</td>";

        } else {
            echo "<td>", "</td>";
        }


    }
    echo "</tr>";
}
echo "</table>";

?>


</body>
</html>
