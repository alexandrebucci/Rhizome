<?php
    require_once("datas/parametres.php");
    ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Incognito - Dans l'ombre de Montbéliard</title>
        <meta name="description" content="Incognito Montbéliard, je suis à la recherche d'un individu peu ordinaire, aidez-moi !" />
        <meta name="author" content="Incognito - Golden Sheep" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/component.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="all">
        <link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
        <!-- Favicons
            ================================================== -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Style
            ================================================== -->
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
    </head>
    <body>
       <header>
             <nav>
                <div class="ban">
                    <div id="menu_barre">
                        <div class="container-fluid">
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="span2">
                                        <div id="logo">
                                            <a href="#">
                                            <img src="img/logo.svg" alt="incognito_logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="span7" id="menulist">
                                        <ul id="menu_horizontal">
                                            <li><a href="accueil.php">Accueil</a></li>
                                            <li class="x_separate">
                                                <img src="img/x/blanc.svg" alt="x blanc">
                                            <li>
                                            <li><a href="news.php">Histoire</a></li>
                                            <li class="x_separate">
                                                <img src="img/x/blanc.svg" alt="x blanc">
                                            <li>
                                            <li><a href="livreor.php">Étapes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu_mobile">
                        <!-- <div id="mobile_barre"> -->
                            <div id="mobile_menu_gauche">
                                <a href="#" id="logo_mobile"><img src="img/mobile/logo.svg" alt="logomobile"></a>
                            </div>
                            <div id="mobile_menu_droite">
                                <a ref="#"  id="menu_a_mobile"><img src="img/mobile/menu.svg" alt="menu"></a>
                                <div id="rubriques">
                                    <ul>
                                        <li>Histoire</li>
                                        <li>Étapes</li>
                                        <li>Flickr</li>
                                    </ul>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div id="titreEtape">
                                <h1>Découvrez les étapes</h1>
                                <div class="hr_chelou"></div>
                            </div>
                        </div>

                        </div>

                    </div>
                
            </nav>
            <!--end:main-nav--> 
        </header>
        <!--end:flx-header-->
        </div>
        <div class="container-fluid after_ban">
            <?php
                $etape ="";
                //requete affichage de l'étape en cours
                $req0 = $PDO->prepare("SELECT * FROM `etape`");
                $req0->execute();
                $resultat0 = $req0->fetchAll(PDO::FETCH_ASSOC);
                foreach ($resultat0 as $donnees) {
                    
                    $etape = $etape.'<div class="row-fluid"><div class="span12 resumeEtape">
                        <div class="span5 main_left_home">
                            <h2>Etape '.$donnees['Id_E'].': '.$donnees['Titre'].'</h2>
                            <h3>'.$donnees['Date'].'</h3>
                            <div id="home_video">
                                <iframe width="640" height="360" src="//www.youtube.com/embed/5uRN7iJ5CqQ" frameborder="0" allowfullscreen></iframe>
                                '.$donnees['Video'].'
                            </div>
                        </div>
                        <div class="span7 home_resume">
                            <h2>Résumé</h2>
                            <p>'.$donnees['Resume'].'</p>
                            <a href="etape.php?etape='.$donnees['Id_E'].'">Accédez à l\'étape</a>
                        </div>
                     </div>
                    </div>';
                }

                  echo $etape;
            ?>
        </div>
        <footer>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span10 offset1">
                        <ul>
                            <li>
                                <a href="#">
                                    <p>Histoire</p>
                                </a>
                            </li>
                            <li>
                                <p class="x_footer">
                                    <img src="img/x/blanc.svg" alt="x blanc">
                                </p>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Étapes</p>
                                </a>
                            </li>
                            <li>
                                <p class="x_footer">
                                    <img src="img/x/blanc.svg" alt="x blanc">
                                </p>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Flickr</p>
                                </a>
                            </li>
                            <li>
                                <p class="x_footer">
                                    <img src="img/x/blanc.svg" alt="x blanc">
                                </p>
                            </li>
                            <li>
                                <a href="#">
                                    <p>À propos</p>
                                </a>
                            </li>
                            <li>
                                <p class="x_footer">
                                    <img src="img/x/blanc.svg" alt="x blanc">
                                </p>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Mentions légales</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span4 offset4">
                        <img src="img/golden_sheep_logo.svg" alt="logo golden sheep">
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <p>© 2013 Goldensheep | Projet Rhizome 2013/2014 | Master PSM | UFR STGI | Université de Franche-Comté</p>
                    </div>
                </div>
            </div>
        </footer>
        <!--end:flx-footer-->
    </body>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/switch_div.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
</html>