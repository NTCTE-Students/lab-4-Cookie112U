<?php
//Создай функцию, которая принимает целое число и возвращает сумму его цифр.
function sumDigits($num) {
    $sum = 0;
    while ($num > 0) {
        $digit = $num % 10;
        $sum += $digit;
        $num = (int) ($num / 10);
    }
    return $sum;
}

print("Сумма цифр: " . sumDigits(1233333) . "\n");