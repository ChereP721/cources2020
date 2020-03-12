<?php

//Найти медиану предыдущего массива и отбросить все  элементы, которые больше и меньше медианы в 2 раза
$array = [];

$n = 20;
for ($i = 0; $i < $n; $i++) {
    $array[] = rand(1, 50);
    echo $array[$i] . "\t";
}

$med = $n / 2;
$n1 = $n;
for ($i = 0; $i < $n; $i++) {
    if (!$array[$med + 1] && $array[$i] / 2 == $array[$med + 1] || $array[$i] * 2 == $array[$med + 1]) {
        unset($array[$i]);
        $n1 = $n - 1;
    }
}
echo "<br/>";
for ($i = 0; $i < $n1; $i++) {
    echo $array[$i] . "\t";
}