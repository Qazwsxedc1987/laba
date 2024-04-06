<?php

// Вычисляем квадратный корень числа 555
$sqrt = sqrt(555);

// Округляем квадратный корень в меньшую и большую стороны
$floor = floor($sqrt);
$ceil = ceil($sqrt);

// Создаем ассоциативный массив с результатами
$result = [
    'original' => $sqrt,
    'floor' => $floor,
    'ceil' => $ceil,
];

// Печатаем массив на экране
foreach ($result as $key => $value) {
    echo "$key => $value<br>";
}
echo "<br>";

echo "Второй вариант";

$sqrt = sqrt(555);
$mass = ['floor' => floor($sqrt), 'ceil' => ceil($sqrt)];

echo 555 ** 0.5;

echo '<pre>';
var_dump($mass);
echo '</pre>';
