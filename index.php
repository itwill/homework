<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
echo "<h3>Задание 1</h3><br>";

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


echo "<h3>Задание 2</h3><br>";

$sum = 80;
$a = 23;
$b = 40;
$c = $sum - $a -$b;
echo "Всего рисунков: ".$sum."<br>";
echo "Фломастерами выполнено: ".$a."<br>";
echo "Карандашами: ".$b."<br>";
echo "Красками на школьной выставке выполнено: <b>".$c."</b> рисунков";


echo "<h3>Задание 3</h3><br>";

define("MORNING", "Доброе утро!");
define("MORNING", NULL);

if (defined("MORNING") == true) echo "Константа объявлена<br>";
else echo "Константа не объявлена<br>";

echo "Константа MORNING = ".MORNING."<br>";

echo "Меняем значение константы на Утро и выводим:<br>";
define("MORNING", "Утро");
echo MORNING;


echo "<h3>Задание 4</h3><br>";

$age = 15;
echo "Возраст ".$age." лет<br>";

if (($age>=18)&&($age <= 65)):
    echo "Вам еще работать и работать";
elseif ($age > 65):
    echo "Вам пора на пенсию";
elseif (($age >= 1) && ( $age <= 17)):
    echo "Вам еще рано работать";
else:
    echo "<br>Неизвестный возраст";
endif;

echo "<h3>Задание 5</h3><br>";
$day = 20;
echo "День: ".$day."<br>";
switch ($day) {
    case (($day < 1) || ($day > 7)) :
    {
        echo "Неизвестный день";
        break;
    }
    case (($day >= 1) && ($day <= 5)) :
        {
            echo "Это рабочий день";
            break;
        }
    case (($day = 6) || ($day = 7)) :
        {
            echo "Это выходной день";
            break;
        }
}

echo "<h3>Задание 6</h3><br>";
$bmv = array(
    "model" => "X5",
    "speed"=>"120",
    "doors"=>"5",
    "year"=>"2015",
);

$toyota = array(
    "model" => "prado",
    "speed"=>"160",
    "doors"=>"5",
    "year"=>"2014",
);

$opel = array(
    "model" => "astra",
    "speed"=>"80",
    "doors"=>"5",
    "year"=>"2008",
);

$auto = array(
    "bmv" => $bmv,
    "toyota" => $toyota,
    "opel" => $opel
);

foreach ($auto as $key => $value) {
    echo "Car $key <br>";
    echo "{$value["model"]}, {$value["speed"]}, {$value["doors"]}, {$value["year"]}<br>";
}

?>
</body>
</html>
