<html>
	<head>
		<meta charset="UTF-8">
	</head>
</html>
<?php
	session_start();
    require_once('../../datas/parametres.php');
    //recuperation des donnees	
    $id = $_POST["etape_id"];
	$Titre = $_POST["etape_titre"];
	$Date = $_POST["etape_date"];	
	$Video = $_POST["etape_video"];
	$Resume = $_POST["etape_resume"];	
	$Description = $_POST["etape_description"];
	$ResumeCourt = $_POST["etape_resume_court"];
	
	//Requete UPDATE
	$q = $PDO->prepare('UPDATE etape SET `Titre`=:Titre, `Date`=:Dat, `Video`=:Video, `Resume`=:Resume, `Description`=:Description, `ResumeCourt`=:ResumeCourt WHERE `id_E` = :id');
    //Asignation des valeurs
    $q->execute(array(
      ":Titre" => $Titre,
      ":Dat" => $Date,
      ":Video" => $Video,
      ":Resume" => $Resume,
      ":Description" => $Description,
      ":ResumeCourt" => $ResumeCourt,
      ":id" =>$id
    ));

    //Redirection vers la page de gestion des etapes
	echo "<script> alert('Vos modifications ont bien été enregistrées');
	window.location.replace('../etapes-gestion.php');
	</script> ";
?>