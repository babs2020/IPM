
<?php




$objet = new PDO('mysql:host=localhost;dbname=db_etudiants', 'root','');

$pdoStart= $objet->prepare('INSERT INTO etudiant VALUES(NULL,:nom,:prenom,:adresse)');  /* pdo: connecter a la base */

$pdoStart->bindvalue(':nom',$_POST['nom'],PDO::PARAM_STR);        /* bind: recupere ce que l'user a tapé et l'aporte dans la table */
$pdoStart->bindvalue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
$pdoStart->bindvalue(':adresse',$_POST['adresse'],PDO::PARAM_STR);  /* pour recuperer les valeur saisies par l'utilisateur */

$insertisok=$pdoStart->execute();       /* pour verifier qu'il ny a pas d'erreur sur le saisis */
if ($insertisok) {
	$message='succes';	
}
else{                                     /* les conditions du insertisok */
		$message='error';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>