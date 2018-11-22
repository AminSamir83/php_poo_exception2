<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 22/11/2018
 * Time: 05:39
 */

function addition  ($x,  $y) {
    if ((gettype($x)==="integer")&&(gettype($y)==="integer"))
    return $x + $y;
    else  throw new Exception('Type des entrées non valides.');
}
$x=['333',5,5.2,0.2,4,true,null];
$y=[3,4,"quarante","44",6.5,0,2];

for ($i=0;$i<7;$i++) {
    try {
        echo addition($x[$i], $y[$i])."<br>";
    } catch (Exception $e) {
        echo 'Exception reçue : ', $e->getMessage(), "<br>";
    }
}