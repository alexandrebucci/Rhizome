<?php 
  require_once("datas/parametres.php");
  //Recupere l'id de l'etape sur laquelle on est
  if(isset($_GET['etape'])){
    $idE = $_GET['etape'];
  }
  else{
    $idE = 1;
  }

  //Requete pour rechercher les indices de type plan dont l'id de l'étape est celui de l'étape sur laquelle on est
  $reqM = $PDO->prepare('SELECT * FROM `indice` WHERE `Type`= "Plan" AND `Id_E` = :idE');
  $reqM->execute(Array(
    ":idE" => $idE
  ));
  $resultatM = $reqM->fetchAll(PDO::FETCH_ASSOC);
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
        <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="all">
        <link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="lightBox/jquery.fancybox.css?v=2.1.5" media="screen" />



        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/indice.js"></script>

    
        <!-- Favicons
            ================================================== -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Style
            ================================================== -->
        <link rel="stylesheet" href="css/style.css" type="text/css"/>

        <!-- Add jQuery library -->
    <script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>

  
    

    
    <script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox').fancybox();
        });
    </script>

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
                                            <li class="x_separate">X
                                            <li>
                                            <li><a href="news.php">Histoire</a></li>
                                            <li class="x_separate">X
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
                    <div class="span4 offset4">
                        <div id="titreEtape">
                            <h1>Appel à l'aide </h1>
                            
                                <div class="hr_chelou"></div>
                            
                            <h2>Lundi 18 janvier</h2>
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
            <div class="row-fluid">
                <div class="span8 main_left_home">
                    <h2>Titre</h2>
                    <h3> Date</h3>
                    <div id="home_video">
                        <iframe width="640" height="360" src="//www.youtube.com/watch?v=UJSyY5HZNYw" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="home_resume">
                        <h2>Résumé</h2>
                        <p>Commodo squid officia chia, exercitation craft beer Marfa umami +1 fashion axe four loko nisi butcher. Tote bag art party tempor meh butcher. Readymade American Apparel deserunt keytar.Commodo squid officia chia, exercitation craft beer Marfa umami +1 fashion axe four loko nisi butcher. Tote bag art party tempor meh butcher. Readymade American Apparel deserunt keytar.</p>
                        <a href="#">Accédez aux indices</a>
                    </div>
                </div>
                <div class="span4 main_right_home">
                    <h2><span>Rejoins-nous</span></h2>
                    <section class="color-10">
                        <div class="cl-effect-10">
                            <div id="fb">
                                <img src="img/fb.svg"><a href="#" target="_blank" data-hover="Facebook"><span>Facebook</span></a>
                            </div>
                            <div id="tw">
                                <img src="img/tw.svg"><a href="#" target="_blank" data-hover="Twitter"><span>Twitter</span></a>
                            </div>
                            <div id="yt">
                                <img src="img/yt.svg"><a href="#" target="_blank" data-hover="Youtube"><span>Youtube</span></a>
                            </div>
                            <div id="fl">
                                <img src="img/fl.svg"><a href="#" target="_blank" data-hover="Flickr"><span>Flickr</span></a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="container-fluid avancement">
            <div class="row-fluid">
                <div class="span12">
                    <h1>Les indices</h1>
                    <div class="row-fluid">
                        <div class="span4 offset4">
                            <div class="hr_chelou"></div>
                        </div>
                    </div>
                    <div id="navIndice">
                        <div id="barCentrale"></div>
                            <ul  class="tt-wrapper">
                                <li id="map_btn" href="#"><span>Lieux</span></li>
                                <li id="photo_btn" href="#"><span>Photos</span></li>
                                <li id="article_btn" href="#"><span>Articles</span></li>
                                <li id="lien_btn" href="#"><span>Liens</span></li>
                            </ul>
                        <div class="clear"></div>
                        <div id="contenuIndice">
                            <div id='photo'class="OFF">
                             <div class="row-fluid">
                                <div class="span3">
                                    <div class="rogneImg">
                                     <a class="fancybox" href="imgIndice/zae.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="imgIndice/zae.jpg" alt="" /></a>
                                        <p>18/10/2013</p>
                                        <a href="#">Flickr</a>
                                    </div>
                                    
                                </div>
                                <div class="span3">
                                    <div class="rogneImg">
                                     <a class="fancybox" href="imgIndice/zae.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="imgIndice/zae.jpg" alt="" /></a>
                                        <p>18/10/2013</p>
                                        <a href="#">Flickr</a>
                                    </div>
                                    
                                </div>
                                
                                <div class="span3">
                                    <div class="rogneImg">
                                        <div class="proposeImg">
                                            <h1>Propose moi d’autres photos à travers tes commentaires. Elles peuvent s’avérer utiles.</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="rogneImg">
                                        <div class="blackImg"></div>
                                    </div>
                                </div>
                                </div>


                            </div>

                            <div id='map' class="ON">
                            <div class="row-fluid">
                                <div class="span12">
                                    <?php include_once("map.php"); ?>
                                </div>
                                </div>
                            </div>

                            <div id='article'class="OFF">
                                <p>
                                    article
                                </p>
                            </div>

                            <div id='lien'class="OFF">
                                <p>
                                    lien
                                </p>
                            </div>

                       </div>
                       <div class="clear"></div>
                    </div>

                </div>
            </div>
        </div>
         <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'incognito-montbeliard'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function () {
                var s = document.createElement('script'); s.async = true;
                s.type = 'text/javascript';
                s.src = '//' + disqus_shortname + '.disqus.com/count.js';
                (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
            }());
        </script>
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
                                <p>X</p>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Étapes</p>
                                </a>
                            </li>
                            <li>
                                <p>X</p>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Flickr</p>
                                </a>
                            </li>
                            <li>
                                <p>X</p>
                            </li>
                            <li>
                                <a href="#">
                                    <p>À propos</p>
                                </a>
                            </li>
                            <li>
                                <p>X</p>
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
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'incognito-montbeliard'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <!-- lightBox -->
      <script type="text/javascript" src="lightBox/jquery.fancybox.js?v=2.1.5"></script>/*
</html>