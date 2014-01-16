<?php
	require_once("../datas/parametres.php");
  setlocale (LC_TIME, 'fr-FR', 'fra');
	if (!empty($_GET['etape'])){
    $id = $_GET['etape'];
	}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">

    <title>Incognito - Gestion des étapes</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.php">Incognito - Admin</a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
              <a href="etapes-gestion-ajout.php">Ajout d'une étape</a>
            </li>
            <li class="active">
              <a href="#">Gestion des étapes</a>
            </li>
            <!-- <li>
              <a href="#">Gestion des commentaires</a>
            </li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="utils/deconnexion.php">Déconnexion</a>
            </li>
          </ul>
        </div>
        
      </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Gestion de l'étape n°<?php echo $id;?></h1>
        <p></p>
        <!-- <button type="button" class="btn btn-primary">Créer une nouvelle étape</button> -->
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <h3>Modification d'une étape</h3>
           <?php
            $req = $PDO->prepare('SELECT *  FROM `etape` WHERE Id_E = :id');
            $req->execute(array(
                ":id"=> $id
            ));
            $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
            foreach ($resultat as $donnees) {

          ?>
          <form class="form-group" role="form" method="POST" action="script/etapes-gestion-modif-traitement.php">
          	<input type="hidden" name="etape_id" id="etape_id" value="<?php echo $id; ?>">
            <label for="etape_titre">Titre de l'étape</label>
            <input type="text" class="form-control" size="80" name="etape_titre" id="etape_titre" value="<?php echo $donnees["Titre"];?>">

            <label for="etape_date">Date de l'étape</label>
            <input type="date" class="form-control" name="etape_date" id="etape_date" value="<?php echo $donnees["Date"];?>">

            <label for="etape_video">Video de l'étape</label>
            <input type="text" class="form-control" size="80" name="etape_video" id="etape_video" value="<?php echo $donnees["Video"];?>">

            <label for="etape_resume">Résumé de l'étape</label>
            <textarea class="form-control" rows="6" name="etape_resume" id="etape_resume"><?php echo $donnees["Resume"];?></textarea>

            <label for="etape_description">Description de l'étape</label>
            <textarea class="form-control" rows="6" name="etape_description" id="etape_description"><?php echo $donnees["Description"];?></textarea>

            <label for="etape_resume_court">Résumé court de l'étape</label>
            <textarea class="form-control" rows="6" name="etape_resume_court" id="etape_resume_court"><?php echo $donnees["ResumeCourt"];?></textarea>

            <button type="submit" class="btn btn-info">Valider</button>
          </form>
          <?php
           }
          ?>
        </div>
      </div>
      <footer>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>