<?php
/**
 * Created by PhpStorm.
 * User: drew-brenet.oispuu
 * Date: 23.01.2018
 * Time: 10:30
 */
require_once 'fnk.php';
/*raamatuVorm();
$raamat = array(
    'title' => 'Peppa Goes To London',
    'author' => 'Ladybird',
    'print' => 'Penguin',
    'status' => 'valjas'
);*/
$raamat = loeVormist();
salvestaRaamat($raamat, 'raamatud.txt');
loeAndmed('raamatud.txt');