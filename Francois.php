<?php
/**
 * Created by PhpStorm.
 * User: Maps_red
 * Date: 13/06/2017
 * Time: 22:08
 */

$referential = [
    ["I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"],
    ["X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC"],
    ["C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM"],
    ["M", "MM", "MMM"],
];

//$number = (string)$_POST['nombre'];
$number = (string)52;
$number = strrev($number);

$taille = strlen($number);
$final = [];

for ($i = $taille - 1; $i >= 0; $i--) {
    if (-1 < $key = $number[$i] - 1) {
        $final[] = $referential[$i][$key];
    }
}

var_dump(implode("", $final));
