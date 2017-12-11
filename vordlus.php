<?php
/**
 * Created by PhpStorm.
 * User: drew-brenet.oispuu
 * Date: 11.12.2017
 * Time: 10:17
 */
$var1 = 5;
$var2 = 5.0;
$var3 = 2;
$var4 = 2.0;
$var5 = "5";
$var6 = '2';
$var7 = true;
$var8 = false;

echo '$var1 = '.$var1.' - '.gettype($var1).'<br />';
echo '$var2 = '.$var2.' - '.gettype($var2).'<br />';
echo '$var3 = '.$var3.' - '.gettype($var3).'<br />';
echo '$var4 = '.$var4.' - '.gettype($var4).'<br />';
echo '$var5 = '.$var5.' - '.gettype($var5).'<br />';
echo '$var6 = '.$var6.' - '.gettype($var6).'<br />';
echo '$var7 = '.$var7.' - '.gettype($var7).'<br />';
echo '$var8 = '.$var8.' - '.gettype($var8).'<br />';

function vordlus($toevaartus){
    if ($toevaartus == true) {
        return ' - true';
    } else {
        return ' - false';
    }
}


echo $var1.' == '.$var2.vordlus($var1 == $var2).'<br />';
echo $var1.' == '.$var5.vordlus($var1 == $var5).'<br />';
echo $var1.' === '.$var5.vordlus($var1 === $var5).'<br />';
echo $var1.' === '.$var5.vordlus($var1 === $var5).'<br />';
echo $var5.' === '.$var5.vordlus($var5 === $var5).'<br />';
echo '<hr />';
echo $var1.' != '.$var3.vordlus($var1 != $var3).'<br />';
echo $var1.' !== '.$var5.vordlus($var1 !== $var5).'<br />';
echo '<hr />';
echo $var7.' == '.$var8.vordlus($var7 == $var8).'<br />';
echo $var7.' != '.$var8.vordlus($var7 != $var8).'<br />';
echo '<hr />';
$a = 2; $b = 5;
$c = $a++;
echo 'a = '.$a.' c = '.$c.'<br />';
$d = $b--;
echo 'b = '.$b.' d = '.$d.'<br />';
$a = 2; $b = 5;
$c = ++$a;
echo 'a = '.$a.' c = '.$c.'<br />';
$d = --$b;
echo 'b = '.$b.' d = '.$d.'<br />';


define('AINE_NIMETUSED', 'PHP Alused');
define('NUMBER', 1);
echo '<hr />'
echo ' Aine nimetus: '.AINE_NIMETUSED. '<br />';
echo ' Konstantne number: '.NUMBER. '<br />';



