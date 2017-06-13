<?php
/**
 * Created by PhpStorm.
 * User: Saromase
 * Date: 12/06/2017
 * Time: 22:05
 */
$array = array();
$array = [10,5,7,2,3];
var_dump($array);
for ($j = 0; $j < count($array)-1; $j++) {
    for ($i = 0; $i < count($array) - 1 -$j; $i++) {
        $a = $array[$i];
        var_dump($a);
        $b = $array[$i + 1];
        var_dump($b);
        if ($a > $b) {
            $array[$i] = $b;
            $array[$i+1] = $a;
            var_dump($array);
        }
    }
}
?>