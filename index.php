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
                        <div id="mobile_barre">
                            <a href="#" id="logo_mobile"><img src="img/mobile/logo.svg" alt="logomobile"></a>
                            <a href="#" id="menu_a_mobile"><img src="img/mobile/menu.svg" alt="menu"></a>
                        </div>
                        <div id="rubriques">
                            <ul>
                                <li>Histoire</li>
                                <li>Étapes</li>
                                <li>Flickr</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <p>Je m’appelle Damien et je suis à la recherche d’une mystérieuse personne à <span>Montbéliard</span>. J’ai besoin de votre aide pour la démasquer.</p>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span3">
                            <a href="#">Découvre mon histoire</a>
                        </div>
                    </div>
            </nav>
            <!--end:main-nav--> 
        </header>
        <!--end:flx-header-->
        </div>
        <div class="container-fluid after_ban">
            <div class="row-fluid">
                <div class="span8 main_left_home">
                    <?php
                        //requete affichage de l'étape en cours
                        $req0 = $PDO->prepare("SELECT * FROM `etape` ORDER BY `Id_E`DESC LIMIT 1");
                        $req0->execute();
                        $resultat0 = $req0->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($resultat0 as $donnees) {
                            # code...
                        }
                        ?>
                    <h2><?php echo $donnees['Titre'];?></h2>
                    <h3><?php echo $donnees['Date'];?></h3>
                    <div id="home_video">
                        <!--  <iframe width="640" height="360" src="//www.youtube.com/embed/5uRN7iJ5CqQ" frameborder="0" allowfullscreen></iframe> -->
                        <?php echo $donnees['Video'];?>
                    </div>
                    <div class="home_resume">
                        <h2>Résumé</h2>
                        <p><?php echo $donnees['Resume'];?></p>
                        <a href="etape.php?etape=<?php echo $donnees['Id_E'];?>">Accédez aux indices</a>
                    </div>
                </div>
                <div class="span4 main_right_home">
                    <h2><span>Rejoins-nous</span></h2>
                    <section class="color-10">
                        <div class="cl-effect-10">
                            <div id="fb">
                                <a href="#" target="_blank" data-hover="Facebook"><img src="img/fb.svg"><span>Facebook</span></a>
                            </div>
                            <div id="tw">
                                <a href="#" target="_blank" data-hover="Twitter"><img src="img/tw.svg"><span>Twitter</span></a>
                            </div>
                            <div id="yt">
                                <a href="#" target="_blank" data-hover="Youtube"><img src="img/yt.svg"><span>Youtube</span></a>
                            </div>
                            <div id="fl">
                                <a href="#" target="_blank" data-hover="Flickr"><img src="img/fl.svg"><span>Flickr</span></a>
                            </div>
                        </div>
                    </section>
                    <div id="lot">
                        <img src="img/cadeau.png" alt="cadeau">
                        <h3>Cadeaux</h3>
                        <span>à gagner</span>
                        <p>Je suis prêt à vous récompenser à l’issue du jeu à travers un 
                            tirage au sort réunissant les participants les plus méritants, 
                            alors à vos loupes.</p>
                        <p><a href="#">Voir les conditions</a><p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid avancement">
        <div class="row-fluid">
            <div class="span12">
                <h1>Nous avons progressé</h1>
                <div class="row-fluid">
                    <div class="span4 offset4">
                        <div class="hr_chelou"></div>
                    </div>
                </div>
                <div class="liste-etapes">
                    <div class="row-fluid">
                        <?php
                            /*
                            *   Pour l'affichage on ouvre un row ensuite lorsqu'on a affiché 3 etapes ($i%3 == 0)
                            *   On ferme le row et on ouvre le suivant
                            *   On compte avec $i qui vaut 1 au début et qu'on incrémente à chaque foreach
                            */
                                $i = 1;
                                //requete affichage de l'étape en cours
                                $req1 = $PDO->prepare("SELECT * FROM `etape` WHERE `Id_E` NOT IN (SELECT MAX(`Id_E`) FROM `etape`) ORDER BY `Id_E` DESC ");
                                $req1->execute();
                                $resultat1 = $req1->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($resultat1 as $donnees) {
                             ?>
                        <div class="span4">
                            <div class="etape">
                                <div class="rond_etape">
                                    <h4><?php echo $donnees['Id_E'];?></h4>
                                </div>
                                <h4><img src="img/x/noir.svg" alt="x noir"> <?php echo $donnees['Titre'];?> <img src="img/x/noir.svg" alt="x noir"></h4>
                                <p><?php echo $donnees['ResumeCourt'];?></p>
                                <a href="etapes.php?etape=<?php echo $donnees['Id_E'];?>">Accéder à cette étape</a>
                            </div>
                        </div>
                        <?php
                            if (($i % 3) == 0){
                                echo"</div>";
                                echo"<div class='row-fluid'>";
                            }
                            $i++;
                            ?>
                        <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container-fluid partenaires">
            <div class="row-fluid">
                <div class="span12">
                    <h1>Partenaires</h1>
                    <div class="row-fluid">
                        <div class="span4 offset4">
                            <div class="hr_chelou_black"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span2"><a href="http://www.axone-montbeliard.fr/" target="_blank"><img src="img/partenaires/axone.jpg" alt="axone"></a></div>
                <div class="span2"><a href="http://www.encreservice.com/" target="_blank"><img src="img/partenaires/encre_service.jpg" alt="encre service"></a></div>
                <!-- <div class="span2"></div>
                    <div class="span2"></div>
                    <div class="span2"></div>
                    <div class="span2"></div>
                    <div class="span2"></div> -->
            </div>
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