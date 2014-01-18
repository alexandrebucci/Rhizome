<html>
	<head>
		<meta charset="UTF-8">
	</head>
</html>
<?php
	//Fonction d'uploead d'image
	function upload($index,$destination,$maxsize=FALSE,$extensions=FALSE)
	{
	   //Test1: fichier correctement uploadé
	     if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0) return FALSE;
	   //Test2: taille limite
	     if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize) return FALSE;
	   //Test3: extension
	     $ext = substr(strrchr($_FILES[$index]['name'],'.'),1);
	     if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
	   //Déplacement
	     return move_uploaded_file($_FILES[$index]['tmp_name'],$destination);
	}
 
	/*$fichierNom = $_FILES['indice_photo']['name']     //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_indice_photo.png).
	$fichierType = $_FILES['indice_photo']['type']     //Le type du fichier. Par exemple, cela peut être « image/png ».
	$fichierTaille = $_FILES['indice_photo']['size']     //La taille du fichier en octets.
	$fichierNomTmp = $_FILES['indice_photo']['tmp_name'] //L'adresse vers le fichier uploadé dans le répertoire temporaire.
	$fichierError = $_FILES['indice_photo']['error'] */   //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.

	session_start();
    require_once('../../datas/parametres.php');
    //recuperation des donnees	
    //Indice de l'indice pour le nom de l'image
    $id_I = $_POST["id_indice"];

    $id_E = $_POST["indice_etape"];
    $Type = $_POST["indice_type"];	
	$Titre = $_POST["indice_titre"];
	$Description = $_POST["indice_description"];
	$Date = $_POST["indice_date"];
	$Lat = $_POST["indice_lat"];
    $Long = $_POST["indice_long"];
	//Si on ajoute une url
    if(isset($_POST["indice_url"])){
        $Url = $_POST["indice_url"];
    }
    else{
        $Url = "";
    }
	
	//Chaine vide si on upload pas de photo
	$Photo = "";
	//On ne fait la suite que si on souhaite uploader une image
	//Explode permet de separer une chaine de caractère et renvoit un array
	//Type = image/png ou image/jpeg
	//$extension[0] = image; $extension[1] = jpeg
	if ($_FILES["indice_photo"]["name"] != ""){
		$extension = explode("/", $_FILES["indice_photo"]["type"]);
		//echo $extension[1];
		$Photo = "img/indice/etape".$id_E."/".$id_I.".".$extension[1];
		
		//Upload de l'image
		$upload = upload('indice_photo','../../img/indice/etape'.$id_E.'/'.$id_I.'.'.$extension[1],5242880, FALSE );
	 
		if ($upload){
		  	echo "<script> alert('Upload du fichier réussi!<br />');
			window.location.replace('../indices-gestion.php');
			</script> ";
		} 
	}

	//Requete UPDATE
	$q = $PDO->prepare('INSERT INTO indice (`Type`, `Titre`, `Description`, `Photo`, `Date`, `Url`, `Lat`, `Long`, `Id_E`) VALUES (:Type, :Titre, :Description, :Photo, :Datee, :Url, :Lat, :Long, :id_E)');
    //Asignation des valeurs
    $q->execute(array(
    	":Type" => $Type,
    	":Titre" => $Titre,
    	":Description" => $Description,
    	":Photo" => $Photo,
    	":Datee" => $Date,
    	":Url" => $Url,
    	":Lat" => $Lat,
   	 	":Long" => $Long,
    	":id_E" => $id_E
    ));

    //Redirection vers la page de gestion des etapes
	echo "<script> alert('Le nouvel indice à bien été enregistré');
	window.location.replace('../indices-gestion.php');
	</script> ";
?>