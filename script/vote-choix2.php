<html>
	<head>
		<meta charset="UTF-8">
	</head>
</html>
<?php
	$score = $_POST["score"];
	$id_etape = $_POST["id_etape"];
	$Id_U = 0;
	$newScore = $score + 1;

	/**
	 * Récupérer la véritable adresse IP d'un visiteur
	 */
	function get_ip() {
		// IP si internet partagé
		if (isset($_SERVER['HTTP_CLIENT_IP'])) {
			return $_SERVER['HTTP_CLIENT_IP'];
		}
		// IP derrière un proxy
		elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			return $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		// Sinon : IP normale
		else {
			return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
		}
	}

	require_once("../datas/parametres.php");

	$ip = get_ip();

	//On verifie que l'utilisateur n'a pas deja voté
	$req0 = $PDO->prepare('SELECT * FROM vote_etape WHERE `Ip` = :ip AND `Id_E` = :idE');
    //Asignation des valeurs
    $req0->execute(array(
    	":ip" => $ip,
    	":idE" => $id_etape
    ));

    if ($req0->rowCount() != 0 ){
    	echo "<script> alert('Vous avez déjà voté');
		window.location.replace('../index.php');
		</script>";
    }
    else{
    	//Modification du score dans la BDD
    	$req1 = $PDO->prepare('UPDATE etape SET `choix2`=:score WHERE `id_E` = :id');
	    //Asignation des valeurs
	    $req1->execute(array(
	      ":score" => $newScore,
	      ":id" =>$id_etape
	    ));

	    //Ajout de la ligne dans la table vote_etape pour savoir si l'utilisateur à deja voté
		$req2 = $PDO->prepare('INSERT INTO vote_etape (`Id_E`, `Ip`) VALUES (:Id_E, :Ip)');
	    //Asignation des valeurs
	    $req2->execute(array(
	    	":Id_E" => $id_etape,
	    	":Ip" => $ip
	    ));

	    //Redirection vers la page index
		echo "<script> alert('votre vote à bien été enregistré');
		window.location.replace('../vote.php');
		</script> ";
	}
?>