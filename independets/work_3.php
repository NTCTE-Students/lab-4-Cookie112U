<?php
//Напиши функцию, которая принимает строку и возвращает количество слов в этой строке.

function wordCount($str) {
    return str_word_count($str);
}

print("Количество слов: " . wordCount("hello wordl!") . "\n"); // не работает с ру

function test($t){
    $data = explode( ' ', $t );
    return count($data);
}
print(test("Привет мир! как дела и hello"));
