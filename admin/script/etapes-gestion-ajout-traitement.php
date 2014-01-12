<html>
	<head>
		<meta charset="UTF-8">
	</head>
</html>
<?php
	session_start();
    require_once('../../datas/parametres.php');
    //recuperation des donnees	
	$Titre = $_POST["etape_titre"];
	$Date = $_POST["etape_date"];	
	$Video = $_POST["etape_video"];
	$Resume = $_POST["etape_resume"];	
	$Description = $_POST["etape_description"];
	
	//Requete UPDATE
	$q = $PDO->prepare('INSERT INTO etape (`Titre`, `Date`, `Video`, `Resume`, `Description`) VALUES (:Titre, :Dat, :Video, :Resume, :Description)');
    //Asignation des valeurs
    $q->execute(array(
      ":Titre" => $Titre,
      ":Dat" => $Date,
      ":Video" => $Video,
      ":Resume" => $Resume,
      ":Description" => $Description
    ));

    //Redirection vers la page de gestion des etapes
	echo "<script> alert('La nouvelle étape à bien été enregistrée');
	window.location.replace('../etapes-gestion.php');
	</script> ";
?>