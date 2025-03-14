<?php
//Создай функцию, которая принимает дату в формате "YYYY-MM-DD" и возвращает её в формате "DD/MM/YYYY".

function reverseDate($date) {
    return date('d/m/Y', strtotime($date));
}
print(reverseDate("2025-03-13") . "\n");