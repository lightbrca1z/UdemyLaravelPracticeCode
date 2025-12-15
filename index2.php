<!DOCTYPE html>

<head></head>

<body>
<?php

$test = 123;
$test2 = 456;
var_dump($test);

//先頭は英文字かアンダーバー。
//組み合わせは、・を使う。

$test3 = $test.$test2;
echo $test3;

echo "<br>";
$test = 'テストです';

echo $test;
echo "<br>";

var_dump($test);
?>

</body>

</html>