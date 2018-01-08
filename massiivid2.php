<?php
/**
 * Created by PhpStorm.
 * User: drew-brenet.oispuu
 * Date: 8.01.2018
 * Time: 8:50
 */
$opilane = array(
    'eesnimi' => 'Mart',
    'perenimi' => 'Lepp',
    'vanus' => 16,
    'klass' => 10,
);
echo '<pre>';
print_r($opilane);
echo '</pre>';

echo '<hr/>';

foreach ($opilane as $voti => $vaartus) {
    echo $voti.' - '.$vaartus.'<br/>';
}

echo '<hr/>';

$opilased = array(
    array('eesnimi' => 'Mart',
        'perenimi' => 'Lepp',
        'vanus' => 16,
        'klass' => 10,),
    array('eesnimi' => 'Mai',
        'perenimi' => 'Kuu',
        'vanus' => 15,
        'klass' => 19,),
    array('eesnimi' => 'Urmas',
        'perenimi' => 'Toru',
        'vanus' => 17,
        'klass' => 11,)

);

echo '<pre>';
print_r($opilased);
echo '</pre>';
