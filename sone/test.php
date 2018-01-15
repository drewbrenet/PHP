<?php
/**
 * Created by PhpStorm.
 * User: drew-brenet.oispuu
 * Date: 15.01.2018
 * Time: 9:28
 */

require_once 'tekst.php';
// loome reaalse objekti tekst class abil
$minuTekst = new tekst();
// teostame testvaade antud objektist
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
// väljastame objekti sone väärtus
$minuTekst->prindiTekst();