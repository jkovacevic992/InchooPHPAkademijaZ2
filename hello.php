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
var_dump($_POST);
echo "</br>";
$numbersArray = $_POST['numbers'];
$array = array_map('intval', explode(',', $numbersArray));

for($i=0;$i<count($array);$i++){
    echo $array[$i], "<br/>";
}
var_dump($array);
?>

</body>
</html>