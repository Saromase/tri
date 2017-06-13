<html>
<body>
<form action=" " method="post">
    <h2>Entrez votre nombre</h2>
    <p>Centaines</p>
    <input type="text" name="centaine">
    <p> Dixaines</p>
    <input type="text" name="dixaine">
    <p>Unites</p>
    <input type="text" name="unite">
    <input type="submit" value="OK">
</form>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Saromase
 * Date: 12/06/2017
 * Time: 22:05
 */
$arrayC = [' ','C', 'CC', 'CCC', 'CD', 'D', 'DC', 'DCC', 'DCCC', 'CM' ];
$arrayD = [' ', 'X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXX', 'LXXX', 'XC'];
$arrayU = [' ', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX'];


$postC = $_POST['centaine'];
$postD = $_POST['dixaine'];
$postU = $_POST['unite'];


$nbC = $arrayC[$postC];
$nbD = $arrayD[$postD];
$nbU = $arrayU[$postU];

if (( $postC or $postD or $postU) != NULL) {
    echo 'vous avez saisie le nombre ', $nbC, $nbD, $nbU;
} else {
    echo " Veuillez saisir un nombre svp";
}

$toto = (string)$postU;
var_dump($toto);

?>

