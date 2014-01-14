<html>
	<head>
		<meta charset="UTF-8">
	</head>
</html>
<?php
	session_start();
    require_once('../datas/parametres.php');
    //recuperation des donnees	
	$id_u = $_POST["commentaire_pseudo"];
	$description = $_POST["commentaire_contenu"];	
	/*$date = new DateTime('now');
	echo date_format("Y-m-d H:i:s",$date);*/
	$date = new DateTime('now');
	//$date = $date->format('Y-m-d H:i:s');
	$date = $date->format('Y-m-d H:i:s');

	$id_etape = $_POST['etape_id'];
	//Requete INSERT
	$req = "INSERT INTO commentaire ( `Description`, `Score`, `Id_U`, `Id_E`) VALUES ('".$description."', 0, ".$id_u.", ".$id_e")";
	mysql_query($req);

	/*$q = $PDO->prepare('INSERT INTO commentaire (`Description`, `Score`, `Id_U`, `Id_E`) VALUES ( :description, :score, :idU, idE)');
    //Asignation des valeurs
    $q->execute(array(
    	":description" => $description,
    	":score" => 0,
    	":idU" => 0,
    	":idE" => $id_etape
    ));
*/
	//$q = $PDO->exec('INSERT INTO commentaire (`Date`, `Description`, `Score`, `Id_U`, `Id_E`) VALUES ('.date("Y-m-d").', '.$description.', 0, 0, '.$id_etape.')');
    
    //Redirection vers la page de gestion des etapes
	echo "<script> alert('Votre commentaire à bien été enregistré');
	window.location.replace('../index.php');
	</script> ";
?>