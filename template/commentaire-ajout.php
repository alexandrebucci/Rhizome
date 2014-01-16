<?php
	if (!empty($_GET['etape'])){
    $idEtape = $_GET['etape'];
	}
	else{
		$idEtape = 0;
		echo $idEtape;
	}
?>
<html>
	<head>
		<meta charset="utf-8" />
    <title>BOOM - Responsive Html5 Portfolio Template</title>
    <meta name="description" content="Incognito Montbéliard, je suis à la recherche d'un individu peu ordinaire, aidez-moi !" />
    <meta name="author" content="Incognito - Golden Sheep" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />		
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
    
    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Style
            ================================================== -->
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
	</head>

	<body>

		<form method="POST" action="../script/commentaire-ajout-traitement.php">
      <input type="hidden" name="etape_id" id="etape_id" value="<?php echo $idEtape; ?>">

      <label for="commentaire_pseudo">Votre pseudo</label>
      <input type="text" class="form-control" size="80" name="commentaire_pseudo" id="commentaire_pseudo" placeholder="Votre pseudo">

      <label for="commentaire_contenu">Votre commentaire</label>
      <textarea class="form-control" rows="6" name="commentaire_contenu" id="commentaire_contenu" placeholder="Votre commentaire"></textarea>

      <button type="submit">Envoyer votre commentaire</button>
    </form>
	</body>
</htlm>