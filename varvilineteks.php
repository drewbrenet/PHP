<?php
/**
 * Created by PhpStorm.
 * User: drew-brenet.oispuu
 * Date: 23.01.2018
 * Time: 10:33
 */
header('Refresh: 1');
for ($rida = 1; $rida <= 5; $rida++){
    $varv = '#';
    for($kord = 1; $kord <= 6; $kord++){
        $juhuarv = rand(0, 15);
        $juhuhex = dechex($juhuarv);
        $varv = $varv.$juhuhex;
//        echo $varv.'<br />';
    }
    echo '<font color="'.$varv.'">Värviline tekst</font><br />';
}