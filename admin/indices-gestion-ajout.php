<?php
  require_once("../datas/parametres.php");
  setlocale (LC_TIME, 'fr-FR', 'fra');
  $req = $PDO->prepare('SELECT Id_I  FROM `indice`');
  $req->execute();
  $nbLigne = $req->rowCount();
  $id_indice = $nbLigne + 1;

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
            <li class="active">
              <a href="indices-gestion-ajout.php">Ajout d'un indice</a>
            </li>
            <li>
              <a href="indices-gestion.php">Gestion des indices</a>
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
        <h1>Ajout d'un indice</h1>
        <p></p>
        <!-- <button type="button" class="btn btn-primary">Créer une nouvelle étape</button> -->
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <form class="form-group" role="form" method="POST" action="script/indices-gestion-ajout-traitement.php" enctype="multipart/form-data">
            <input type="hidden" name="id_indice" id="id_indice" value="<?php echo $id_indice ?>">
            <label for="indice_etape">Etape de l'indice <small>(obligatoire)</small></label>
            <input type="text" class="form-control" size="80" name="indice_etape" id="indice_etape" placeholder="Etape de l'indice">

            <label for="indice_type">Type de l'indice <small>(obligatoire)</small></label>
            <select required="required" class="form-control" name="indice_type" id="indice_type">
              <option>Photo</option>
              <option>Plan</option>
              <option>Article</option>
              <option>Lien</option>
            </select>
            <label for="indice_titre">Titre de l'indice</label>
            <input type="text" class="form-control" size="80" name="indice_titre" id="indice_titre" placeholder="Titre de l'indice">

            <label for="indice_photo">Photo de l'indice</label>
            <input type="file" class="form-control" size="80" name="indice_photo" id="indice_photo">

            <label for="indice_date">Date de l'indice</label>
            <input type="date" class="form-control" size="80" name="indice_date" id="indice_date">

            <label for="indice_url">Url de l'indice</label>
            <input type="text" class="form-control" name="indice_url" id="indice_url">

            <label for="indice_description">Description de l'indice</label>
            <textarea class="form-control" rows="6" name="indice_description" id="indice_description" placeholder="Description de l'indice"></textarea>

            <button type="submit" class="btn btn-info">Valider</button>
          </form>

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