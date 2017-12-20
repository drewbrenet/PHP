<?php
/**
 * Created by PhpStorm.
 * User: drew-brenet.oispuu
 * Date: 20.12.2017
 * Time: 12:58
 */



function looMassiiv($elemendid){
    $massiiv = array();
    for($i = 0; $i < $elemendid; $i++){
        $juhuarv = rand(100, 999);
        $massiiv[] = $juhuarv;
    }
    return $massiiv;
}
echo '<pre>';
print_r(looMassiiv(15));
echo '</pre>';


echo '<hr/>';


function valjastaMassiiv($massiiv){
    foreach($massiiv as $asd){
        echo '<table border="1">';
        echo '<td>'.$asd.'<br>'.'</td>';
        echo '</table>';
    }
}
print_r(valjastaMassiiv(array(1,2,3,4,5,6)));

echo '<hr>';

function vahetaMinMax($massiiv){
    $max = max($massiiv);
    $min = min($massiiv);
    echo'min = '.$min.'<br />';
    echo'max = '.$max.'<br />';
    for ($i = 0; $i< count($massiiv); $i++){
        if($massiiv[$i] == $min){
            $massiiv[$i] = $max;
        }
        else if($massiiv[$i] == $max){
            $massiiv[$i] = $min;
        }
    }
}
vahetaMinMax($arvud);
valjastaMassiiv($arvud);


echo '<hr/>';

function elementideKorrutis($massiiv){
    //$uus = array();
$korrutis = 1;
    $lipp = 1;
    echo 'Tulemus: ';
    for($i = 0; $i < count($massiiv); $i++){
        if($massiiv[$i] > 0 and $i % 2 == 0){
            //$uus[]=$massiiv[$i];
            $korrutis = $korrutis * $massiiv[$i];
            if($lipp == 1){
                echo $massiiv[$i];
                $lipp = 0;
            }else {
                echo '*'.$massiiv[$i];
            }
        }
    }
    echo ' = '.$korrutis;
}
elementideKorrutis(array(1,2,3,4,0,4,3,2,2,3,3,2,2,0,0,0,0));

echo '<hr/>';

function mitteDubleeri($massiiv){
    $valjasta = '';
    foreach($massiiv as $element){
        if($valjasta != $element){
            $valjasta = $element;
            echo $element.';';
        }
    }

}
mitteDubleeri(array(1, 1, 1, 2, 2, 2, 2, 3));
echo '<hr/>';
echo '<br />';
