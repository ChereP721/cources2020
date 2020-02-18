<?php
//Задание 2 - Управляющие констукции + циклы
//Написать скрипт, считающий сумму положительных чисел меньших числа $a, которые делятся на 3. Например: есть число 7,
//положительные числа меньше его: 1,2,3,4,5,6 из них на 3 делятся 3 и 6, их сумма = 9.
//Проверить корректность данных: что вообще число, что целое и т.п.

$a = 16;

if (!is_int($a)) {
    echo 'Неверный ввод. Введите целое число.';
    return;
}

$sum = 0;

for ($i = 1; $i < $a; $i++) {
    if (!($i % 3)) {
        $sum += $i;
    }
}

echo 'Сумма кратных трем положительных чисел меньше ' . $a . ' равна ' . $sum;

//NOTE: да, вариант, но не оптимальный - итераций можно сделать в 3 раза меньше и без проверок если уменьшать число на 3