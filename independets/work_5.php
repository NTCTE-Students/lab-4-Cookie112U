<?php
//Напиши функцию, которая принимает строку и возвращает её с заглавными буквами.
function upperCase($str){
    return mb_strtoupper($str);
}

print_r(upperCase("hello Привет")); // не роб рус / робит

