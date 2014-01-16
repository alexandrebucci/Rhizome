<?php
  include_once ("utils/auth.php");
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

    <title>Incognito - Admin</title>

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
            <!-- <li>
              <a href="home-gestion.php">Gestion de la home</a>
            </li> -->
            <li>
              <a href="etapes-gestion.php">Gestion des étapes</a>
            </li>
            <!-- <li>
              <a href="commentaires-gestion.php">Gestion des commentaires</a>
            </li> -->
            <li>
              <a href="indices-gestion.php">Gestion des indices</a>
            </li>
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
        <h1>Bonjour</h1>
        <p>Bienvenu sur l'admin d'incognito</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
       <!--  <div class="col-md-4 cage">
          <h2>Gestion de la home</h2>
          <p>Gestion du résumé, de la vidéo...</p>
          <p><a class="btn btn-info" href="home-gestion.php" role="button">GOOOOO &raquo;</a></p>
        </div> -->
        <div class="col-md-6 cage">
          <h2>Gestion des étapes</h2>
          <p>Création et modification des étapes.</p>
          <p><a class="btn btn-info" href="etapes-gestion.php" role="button">GOOOOO &raquo;</a></p>
       </div>
        <div class="col-md-6 cage">
          <h2>Gestion des indices</h2>
          <p>Création et gestion des indices.</p>
          <p><a class="btn btn-info" href="indices-gestion.php" role="button">GOOOOO &raquo;</a></p>
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
