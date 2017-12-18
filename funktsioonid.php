<?php
/**
 * Created by PhpStorm.
 * User: drew-brenet.oispuu
 * Date: 15.12.2017
 * Time: 8:49
 */

function genereeriVarv(){
    $varv = '#';
    for($kord = 1; $kord <=6; $kord++){
            $juhuArv =rand(0, 15);
            $juhuhex = dechex($juhuArv);
            $varv = $varv.$juhuhex;
        }
        return $varv;
}




function looTabel($ridadeArv, $veerudeArv) {
    echo '<table border="1">';
        for($reaNUmber = 1; $reaNUmber <= $ridadeArv; $reaNUmber++){
            echo '<tr>';
            for($veerNumber = 1; $veerNumber <= $veerudeArv; $veerNumber++){
                echo '<td style="background-color:  '.genereeriVarv().';">';
                echo rand(10, 99);
                echo '</td>';
            }
            echo '</tr>';
        }
    echo '</tabel>';
}
looTabel(5, 7);



function tabelTekst($sona1, $sona2, $sona3, $sona4){
    echo'<tabel border="1">';
    for ($reaNumber = 1; $reaNumber <=4; $reaNumber++){
        echo '<tr>';
            echo '<td>';
                echo ${'sona'.$reaNumber};
            echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
