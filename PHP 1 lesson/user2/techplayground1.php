<?php
//Задание 1 - Управляющие констукции + циклы
//Написать скрипт, считающий сумму цифр числа $a. Например: есть число 123, сумма цифр 1 + 2 + 3 = 6
//Проверить корректность данных: что вообще число, что целое и т.п.

$a = 77777;

if ((!is_string($a)) and (is_numeric($a)) and (is_int($a))){ // Проверка корректности данных

    $sum = 0; // Вычисление суммы цифр в цикле
    $num = $a;
    while ($num > 0):
        $digit = $num%10;
        $sum +=$digit;
        $num /=10;
    endwhile;

    echo 'Сумма цифр числа '.$a.' равна '.$sum;

}

else{
    echo 'Неверный ввод. Введите целое число.';
    exit(0);
}




