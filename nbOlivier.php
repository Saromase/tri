<html>
<body>
<form action=" " method="post">
    <h2>Entrez votre nombre</h2>
    <input type="text" name="nombre">
    <input type="submit" value="OK">
</form>
</body>
</html>



<?php
/**
 * Created by PhpStorm.
 * User: apprenant19
 * Date: 13/06/17
 * Time: 17:20
 */

$toto = (string)$_POST['nombre'];

for ($i = 0; $i < count($toto); $i++){
    $nb1 = $toto[$i];
    var_dump($nb1);
    $nb2 = $toto[$i+1];
    var_dump($nb2);
}
?>