<html>
<body>
<form action=" " method="post">
    <h2>Entrez votre nombre</h2>
    <input type="text" name="nombre">
    <input type="submit" value="OK">
</form>
<?php
/**
 * Created by PhpStorm.
 * User: apprenant19
 * Date: 13/06/17
 * Time: 17:20
 */
$romainUnite=[" ","I","II","III","IV","V","VI","VII","VIII","IX"];
$romainDizaine=[" ","X","XX","XXX","XL","L","LX","LXX","LXXX","XC"];
$romainCentaine=[" ","C","CC","CCC","CD","D","DC","DCC","DCCC","CM"];
$romainMillier=[" ","M","MM","MMM"];

$nombreArabe = (string)$_POST['nombre'];
$taille=strlen($nombreArabe);

for ($i=0;$i<$taille;$i++){
	switch ($taille){
		case 1:
		$unite=$romainUnite[$nombreArabe[$i]];
		echo $unite;
		break;
		
		case 2:
		$dizaine=$romainDizaine[$nombreArabe[$i]];
		$unite=$romainUnite[$nombreArabe[$i+1]];
		$resultat=$dizaine+$unite;
		echo $resultat;
		break;
	}
		}




?>


</body>
</html>