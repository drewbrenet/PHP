<?php
/**
 * Created by PhpStorm.
 * User: drew-brenet.oispuu
 * Date: 15.01.2018
 * Time: 9:28
 */

class tekst
{
    // klassi omadus(ed)
    // klassi muutuja(d)
    var $sone = '';
    // klassi tegevused
    // klassi meetodid
    // klassi konstruktor
    /**
     * tekst constructor.
     */
    public function __construct($s)
    {
        $this->maaraTekst($s);
    }
    // teksti määramine
    function maaraTekst($s){
        $this->sone = $s;
    }
    function pridniTekst(){
        echo $this->sone.'<br/>';
    }
}