<?php
//Создай функцию, которая принимает строку и проверяет, является ли она палиндромом (читается одинаково слева направо и справа налево).

function isPalindrome($str) {
    $cleanStr = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str));
    return $cleanStr === strrev($cleanStr);
}
echo "Палиндром? " . (isPalindrome("А роза упала на лапу Азора") ? "Да" : "Нет") . "\n";