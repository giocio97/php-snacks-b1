<?php


$n = 15;
$min = 0;
$max = 100;

$arr_random =[];

while(count($arr_random) < 15){

    $random_number = rand($min, $max);

    if (!in_array( $random_number, $arr_random)) {
        $arr_random[] = $random_number;
    }
    $interatios++;
}

var_dump($arr_random);