<?php
//Создай функцию, которая принимает целое число и проверяет, является ли оно простым (делится только на себя и на единицу).

function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

print(isPrime(7) ? "Число является простым" : "Число не является простым");
