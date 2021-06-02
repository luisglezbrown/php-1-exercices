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


// EjercicioFindMaxTest
function findMax(array $array): int {
    $max = $array[0];
    foreach ($array as $element) {
        $max > $element ?: $max = $element;
    }
    return $max;
}

function findMax2(array $array): int {
    return max($array);
}


//EjercicioAgeAverageTest
function averageAge(array $array): float {
    
    $sum = 0;
    foreach ($array as $element) {
        $sum += $element['age'];
    }
    $average = $sum / sizeof($array);
    return $average;
}