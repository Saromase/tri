<html>
<body>
<form action=" " method="post">
    <h2>Entrez votre nombre</h2>
    <p>Centaines</p>
    <input type="number" name="centaine">
    <p> Dixaines</p>
    <input type="number" name="dixaine">
    <p>Unites</p>
    <input type="number" name="unite">
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

$arrayC = [' ', 'C', 'CC', 'CCC', 'CD', 'D', 'DC', 'DCC', 'DCCC', 'CM'];
$arrayD = [' ', 'X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXX', 'LXXX', 'XC'];
$arrayU = [' ', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX'];
if (($_POST['centaine'] or $_POST['dixaine'] or $_POST['unite']) != NULL) {
    echo 'vous avez saisie le nombre ', $arrayC[$_POST['centaine']], $arrayD[$_POST['dixaine']], $arrayU[$_POST['unite']];
} else {
    echo 'Veuillez saisir un nombre svp';
}

?>



