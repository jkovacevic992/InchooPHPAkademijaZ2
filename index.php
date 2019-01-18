<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post">
    <input type="text" name="numbers"><br/>
    <input type="submit" value="Submit">

</form>

<?php
//var_dump($_POST);
//echo "</br>";
$numbersArray = $_POST['numbers'];
$array = array_map('intval', explode(',', $numbersArray));
$numsToExclude = [];
//for($i=0;$i<count($array);$i++){
//    if($array[$i]%2!==0){
//        $numsToExclude[] = $array[$i];
//        continue;
//    }
//    echo $array[$i], "<br/>";
//}
//var_dump($array);
//echo "<br/>";
//var_dump($numsToExclude);
//echo "<br/>";

//$array = array_values(array_diff($array, $numsToExclude));
//echo "Array sum ", array_sum($array), "<br/>";
//echo "Array count ", count($array), "<br/>";
$arithmeticMean = array_sum($array)/count($array);
//var_dump($array);
echo "<br/>";
$closestNumber = null;
sort($array);
//var_dump($array);
foreach($array as $key =>  $value){
    if($value >= $arithmeticMean && $value%2===0){
        $closestNumber = $value;
        break;
    }
}


echo $closestNumber;
?>

</body>
</html>