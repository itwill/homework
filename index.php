<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>Задание 1</h3><br>
<?php
$name = "Svetlana";
$age = "100";
echo "Меня зовут " . $name."<br>";
echo "Мне $age лет<br>";
echo "\" двойная кавычка<br>";
echo "! воскл. знак<br>";
echo "| вертикальная черта<br>";
echo "\\ обратный слэш<br>";
echo "/ слэш<br>";
echo "' кавычка<br>";
echo "\" двойная кавычка<br>";
echo "\\ обратный слэш<br>";
?>

<h3>Задание 2</h3><br>
<?php
$sum = 80;
$a = 23;
$b = 40;
$c = $sum - $a -$b;
echo "Всего рисунков: ".$sum."<br>";
echo "Фломастерами выполнено: ".$a."<br>";
echo "Карандашами: ".$b."<br>";
echo "Красками на школьной выставке выполнено: <b>".$c."</b> рисунков";
?>

<h3>Задание 3</h3><br>
<?php
define("MORNING", "Доброе утро!");
define("MORNING", NULL);
if ( defined("MORNING")== true )echo "Константа объявлена<br>";
else echo "Константа не объявлена<br>";
echo "Константа MORNING = ".MORNING."<br>";

echo "Меняем значение константы на Утро и выводим:<br>";
define("MORNING", "Утро");
echo MORNING;
?>



</body>
</html>
