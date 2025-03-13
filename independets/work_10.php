<?php
//Создай функцию, которая принимает массив и возвращает его, удаляя все дубликаты.

function removeDuplicates($arr) {
    return array_unique($arr);
}
print_r(implode(" ", removeDuplicates([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10])));