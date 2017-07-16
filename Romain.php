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


<?php 
function caesarEncryption(string $input){
    $alphabet = [' ','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $splitArray = str_split($input);
        

}

function Encryption($ary, $number){
    
    for ($i=0; $i < count($ary); $i++){
        $remplacement = array($i+$number => $ary[$i]);
        $newAry = array_replace($newAry, $remplacement);
    }
    return $newAry;
}
function printArray($ary){
    echo '<pre>';
    print_r($ary);
    echo '</pre>';
}
$alphabet = [' ','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
$alph = Encryption($alphabet,2);
printArray($alph);


/* $string = "bonjour je suis romain";
$test = caesarEncryption($string);
printArray($test); */
?>

<?php
function happyNumber(int $number){
    $firstCarre = $number * $number;
    while (isset($message) == false){
        $squarred = resultSquarred($firstCarre);
        if ($squarred = 0){
            $message = "Féliciation le nombre que vous avez choisit est un nombre heureux";
        } else if ($squarred = 4 || $squarred = 16 || $squarred = 37 || $squarred = 58 || $squarred = 89 || $squarred = 145 || $squarred = 42 || $squarred = 20) {
            $message = "Le nombre que vous avez choisit est un nombre malheureux";
        } else {
            $squarred = resultSquarred($squarred);
        }
    }
    return $message;
}

function resultSquarred(string $string){
    $numberSplit = str_split($string,1);
    $resultat = 0;
    for ($i = 0; $i < count($numberSplit); $i++){
        $resultat += $numberSplit[$i] * $numberSplit[$i];
    }
    echo $resultat;
    return $resultat;
}
$test = resultSquarred(7);
echo $test;
$test2 = resultSquarred($test);
echo $test2;
$test3 = resultSquarred($test3);
echo $test3;
echo happyNumber(7);



