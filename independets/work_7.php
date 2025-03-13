<?php

//Напиши функцию, которая принимает строку и возвращает её длину, не используя встроенные функции PHP для получения длины строки.

function stringLengths($str) {
    $length = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $length++;
    }
    return $length;
}

print("Длина строки: " . stringLengths("Hello, world!") . "\n");