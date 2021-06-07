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

function averageAge2(array $array): float {

    return array_sum(array_column($array, 'age'))/count($array);
}


//EjercicioReverseTest
function reverseString(string $input): string {
    $chars = mb_str_split($input);
    return implode('', array_reverse($chars));
}

function reverseWords(string $input): string {

    $words = explode(" ", $input);
    $wordsReverse = array_reverse($words);
    $stringWordsReverse = implode(" ", $wordsReverse);
    
    return $stringWordsReverse;
}

function reverseCharactersInWords(string $input): string {

    $words = explode(" ", $input);
    $reversedArray = [];
    foreach($words as $word) {
        $reversedArray[] = reverseString($word);
    }

    return implode(' ', $reversedArray);
}