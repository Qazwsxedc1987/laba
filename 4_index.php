<?php

// Функция для вычисления остатка от деления
function remainder($a, $b)
{
    return $a % $b;
}

// Печатаем результат работы функции
echo remainder(10, 3); // 1
echo "<br>";
echo remainder(15, 4); // 3
echo "<br>";
echo remainder(20, 5); // 0