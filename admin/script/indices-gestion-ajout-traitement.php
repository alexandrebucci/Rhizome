<html>
	<head>
		<meta charset="UTF-8">
	</head>
</html>
<?php
	session_start();
    require_once('../../datas/parametres.php');
    //recuperation des donnees	
    $id_E = $_POST["indice_etape"];
    $Type = $_POST["indice_type"];	
	$Titre = $_POST["indice_titre"];
	$Description = $_POST["indice_description"];
	$Photo = $_POST["indice_photo"];
	
	//Requete UPDATE
	$q = $PDO->prepare('INSERT INTO indice (`Type`, `Titre`, `Description`, `Photo`, `Id_E`) VALUES (:Type, :Titre, :Description, :Photo, :id_E)');
    //Asignation des valeurs
    $q->execute(array(
    	":Type" => $Type,
    	":Titre" => $Titre,
    	":Description" => $Description,
    	":Photo" => $Photo,
    	":id_E" => $id_E
    ));

    //Redirection vers la page de gestion des etapes
	echo "<script> alert('Le nouvel indice à bien été enregistré');
	window.location.replace('../indices-gestion.php');
	</script> ";
?>