<?php
/**
 * Created by PhpStorm.
 * User: drew-brenet.oispuu
 * Date: 23.01.2018
 * Time: 10:32
 */
for($kord = 1; $kord <= 10; $kord++){
    if($kord % 2 == 0){
        $varv = 'red';
        break;
    } else {
        $varv = 'blue';
    }
    echo '<font color="'.$varv.'">'.$kord.'</font><br />';
}
echo '<hr />';
$kord = 11;
while($kord <= 10){
    echo '<i>'.$kord.'</i><br />';
    $kord++;
}
echo '<hr />';
$kord = 11;
do {
    echo '<b>'.$kord.'</b><br />';
    $kord++;
} while($kord <= 10);