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
 /* definition des variables */
$romainUnite=[" ","I","II","III","IV","V","VI","VII","VIII","IX"];
$romainDizaine=[" ","X","XX","XXX","XL","L","LX","LXX","LXXX","XC"];
$romainCentaine=[" ","C","CC","CCC","CD","D","DC","DCC","DCCC","CM"];
$romainMillier=[" ","M","MM","MMM"];

$nombreArabe = $_POST['nombre'];//recuperation du chiffre et stockage dans une variable. la conversion en str n'est pas obligatoire puisque variable texte
$taille=strlen($nombreArabe); // creation d'une variable taille pour récupérer le nombre d'élement dans le nombre arabe

if ($nombreArabe != NULL){ // on veut que la variable nombre arabe contienne qq chose
		switch ($taille){ // on définit une condition en fonction de la taille
			case 1:// si la taille =1
			for ($i=0;$i<$taille;$i++){ // on parcours la boucle
			$unite=$romainUnite[$nombreArabe[$i]]; // petite subtilité(on créer une variable unité qui pointerat dans le tableau des unité romaine. l'index ou la clé choisit sera = au nombre représenté par $nombreArabe[$i] 
			echo $unite;
			break;
			}
			
			case 2:
			for ($i=0;$i<$taille-1;$i++){ // on enlève 1 à la taille car on ne veut qu'un tour de boucle etc.....
			$dizaine=$romainDizaine[$nombreArabe[$i]];// la dizaine est en 1ère position
			$unite=$romainUnite[$nombreArabe[$i+1]]; //l'unité est en deuxième position etc..........
			echo $dizaine."".$unite;
			break;
			}
			
			case 3:
			for ($i=0;$i<$taille-2;$i++){
			$centaine=$romainCentaine[$nombreArabe[$i]];
			$dizaine=$romainDizaine[$nombreArabe[$i+1]];
			$unite=$romainUnite[$nombreArabe[$i+2]];
			echo $centaine."".$dizaine."".$unite;
			break;
			}
			
			case 4:
			for ($i=0;$i<$taille-3;$i++){
			$millier=$romainMillier[$nombreArabe[$i]];	
			$centaine=$romainCentaine[$nombreArabe[$i+1]];
			$dizaine=$romainDizaine[$nombreArabe[$i+2]];
			$unite=$romainUnite[$nombreArabe[$i+3]];
			echo $millier."".$centaine."".$dizaine."".$unite;
			break;
			}
			
		}
	}




?>


</body>
</html>