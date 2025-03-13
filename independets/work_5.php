<?php
//Напиши функцию, которая принимает строку и возвращает её с заглавными буквами.
function upperCase($str){
    return strtoupper($str);
}

print_r(upperCase("hello")); // не роб рус
