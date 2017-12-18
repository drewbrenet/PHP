<?php
/**
 * Created by PhpStorm.
 * User: drew-brenet.oispuu
 * Date: 18.12.2017
 * Time: 12:04
 */

function arvuSumma($number){
    $summa = 0;
    while($number != 0) {
        $arv = $number % 10;
        $summa = $summa + $arv;
        $number = $number / 10;
        settype($number, 'integer');

    }
    return $summa;
}
for ($kord = 1; $kord <= 5; $kord++) {
    $number = rand(0, 1000);
    echo 'Numbrid ' . $number . ' arvude summa on ' . arvuSumma($number) . '<br/>';
}