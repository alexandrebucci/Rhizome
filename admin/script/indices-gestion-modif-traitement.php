<html>
	<head>
		<meta charset="UTF-8">
	</head>
</html>
<?php
	session_start();
    require_once('../../datas/parametres.php');
    //recuperation des donnees	
    $id = $_POST["indice_id"];
    $id_E = $_POST["indice_etape"];
    $Type = $_POST["indice_type"];	
	$Titre = $_POST["indice_titre"];
	$Description = $_POST["indice_description"];
	$Photo = $_POST["indice_photo"];
	
	//Requete UPDATE
	$q = $PDO->prepare('UPDATE indice SET `Type` = :Type, `Titre`=:Titre, `Photo`=:Photo, `Id_E` = :id_E WHERE `id_I` = :id');
    //Asignation des valeurs
    $q->execute(array(
    	":Type" => $Type,
     	":Titre" => $Titre,
     	":Photo" => $Photo,
     	":id_E" => $id_E,
      	":id" =>$id
    ));

    //Redirection vers la page de gestion des etapes
	echo "<script> alert('Vos modifications ont bien été enregistrées');
	window.location.replace('../indices-gestion.php');
	</script> ";
?>