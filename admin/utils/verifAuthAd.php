<?php
    
    //recuperation des donnees	
	$nom=$_POST["Nom"];
	$Pwd=$_POST["Pwd"];		

	//connexion a la BD
	include_once("../../datas/parametres.php");

	//requete a la BD
	$req= $PDO->prepare('Select `Nom`,`Pwd` from `admin` where `nom`= :nom and `Pwd`= :pwd');
	$req->execute(array(
		":nom"=> $nom,
		":pwd"=> $Pwd
	));
	$resultat = $req->fetchAll(PDO::FETCH_ASSOC);
	$nbLigne = $req->rowCount();
	if ($nbLigne != 0){
		//Debut de session
		session_start();
		$_SESSION['connecte'] = 1;
		$_SESSION['id'] = $resultat['Nom'];
		$PDO = null;
		header("location:../index.php");
		exit;

	}
	else{
		header("location:formulaire.html");
		$PDO = null;
	}
?>