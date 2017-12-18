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



function otsiNumber($suvalineArv, $kindelArv){
    echo $kindelArv. ' esined numbris '.$suvalineArv;
    $mituKorda = 0;
    while($suvalineArv != 0) {
        $arv = $suvalineArv % 10;
        if ($arv == $kindelArv){
            $mituKorda++;
        }
        $suvalineArv = $suvalineArv / 10;
        settype($suvalineArv, 'integer');
    }
    echo ' '.$mituKorda.', arv korda<br/>';
}

otsiNumber(442158755745, 5);