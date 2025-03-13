<?php
//Создай функцию, которая генерирует случайный пароль заданной длины, используя буквы и цифры.

function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    
    return $password;
}

$password = generatePassword(8);

print("Сгенерированный пароль: $password\n");