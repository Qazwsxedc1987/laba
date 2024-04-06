<?php

// Функция для генерации случайного числа в заданном диапазоне
function random_range($a, $b)
{
    return rand($a, $b);
}

// Печатаем 5 случайных чисел
for ($i = 0; $i < 5; $i++) {
    echo random_range(1, 100) . "<br>";
}
