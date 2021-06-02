<?php

declare(strict_types=1);

// EjercicioSumArrayTest
function sumArray(array $array): int {
    $sum = 0;
    for($index = 0; $index < sizeof($array); $index++){
        $sum += $array[$index];
    }

    return $sum;
}

function sumArray2(array $array): int {
    $sum = 0;
    foreach ($array as $element) {
        $sum += $element;
    }

    return $sum;
}

function sumArray3(array $array): int {
    return array_sum($array);
}