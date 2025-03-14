<?php
//Напиши функцию, которая вычисляет факториал числа с использованием цикла (не рекурсии).
function factorial($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}
$factorials = 5;
print("Факториал числа: {$factorials} = ". factorial($factorials) . "\n");