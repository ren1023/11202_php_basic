<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php

$age=10;$name='Mary';

$temp=$age;
$age=$name;
$name=$temp;


echo "age  $age <br>";
echo "name $name <br>";

?>
</body>

</html>