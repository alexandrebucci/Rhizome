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

    require_once('../../datas/parametres.php');
    //recuperation des donnees	
    $id = $_POST["indice_id"];
    $id_E = $_POST["indice_etape"];
    $Type = $_POST["indice_type"];	
  	$Titre = $_POST["indice_titre"];
  	$Description = $_POST["indice_description"];
    $Date = $_POST["indice_date"];
    $Lat = $_POST["indice_lat"];
    $Long = $_POST["indice_long"];
    //si on upload une photo
    if(isset($_POST["indice_photo"])){
        $Photo = $_POST["indice_photo"];
    }
    else{
        $Photo = "";
    }
	
    //Si on ajoute une url
    if(isset($_POST["indice_url"])){
        $Url = $_POST["indice_url"];
    }
    else{
        $Url = "";
    }
    
    //On ne fait la suite que si on souhaite uploader une image
    //Explode permet de separer une chaine de caractère et renvoit un array
    //Type = image/png ou image/jpeg
    //$extension[0] = image; $extension[1] = jpeg
    if (isset($_FILES['photo']) && !empty($_FILES['photo']) && !empty($_FILES['photo']['name'])){
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
	$q = $PDO->prepare('UPDATE indice SET `Type` = :Type, `Titre`=:Titre, `Photo`=:Photo, `Date`=:Datee, `Url`=:Url,`Lat`=:Lat, `Long`=:Long, `Id_E` = :id_E WHERE `id_I` = :id');
    //Asignation des valeurs
    $q->execute(array(
    	":Type" => $Type,
     	":Titre" => $Titre,
     	":Photo" => $Photo,
      ":Datee" => $Date,
      ":Url" => $Url,
      ":Lat" => $Lat,
      ":Long" => $Long,
     	":id_E" => $id_E,
      ":id" =>$id
    ));

    //Redirection vers la page de gestion des etapes
    	echo "<script> alert('Vos modifications ont bien été enregistrées');
    	window.location.replace('../indices-gestion.php');
    	</script> ";
?>