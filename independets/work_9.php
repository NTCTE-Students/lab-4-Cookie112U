<?php
//Напиши функцию, которая принимает температуру в градусах Цельсия и возвращает её в градусах Фаренгейта.
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9 / 5) + 32;
}
$celsius = 1;

print("Температура в Фаренгейтах: ". celsiusToFahrenheit($celsius) . "\n");
