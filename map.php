<?php 
  //require_once("datas/parametres.php");
  //Recupere l'id de l'etape sur laquelle on est
  /*if(isset($_GET['etape'])){
    $idE = $_GET['etape'];
  }
  else{
    $idE = 1;
  }*/
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
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta charset="UTF-8">

    <script language="Javascript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript">
    
      function initialize() {
        var lat;
        var lng;
        //var marker;
        var markerLatLng;
        //Tableau contenant tous les marker
        var tabMarker = new Array();
        //marker OFF et active
        var markerOFF = "img/map/pointeurNoir.png";
        var markerON = "img/map/pointeurRouge.png";
        //Options de la carte
        var mapOptions = {
          center: new google.maps.LatLng(47.5099792, 6.8016417),
            zoom: 15,
            scrollwheel: false,
            scaleControl: true,
            panControl: true,
            mapTypeControl: true
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);

        <?php
        foreach ($resultatM as $donnees) {
        ?>
          //Lat et lng de l'indice dans la BDD
          lat = <?php echo $donnees['Lat'];?>;
          lng = <?php echo $donnees['Long'];?>;

          markerLatLng = new google.maps.LatLng(lat, lng);

          var url = "<?php echo $donnees['Url'];?>";

          //Chaque contenu est indentifié par contentString+Id_I
          var contentString<?php echo $donnees['Id_I'];?> = "<div class='row-fluid'><div class='span7'><div id='descriptionLieu'><h2><?php echo $donnees['Titre'];?></h2>"+
            "<p><?php echo $donnees['Description'];?></p>"+
            "<div class='home_resume'><a href='"+url+"' target='_blank'>Plus d'infos</a></div></div></div>"+
            "<div class='span5'><div class='rogneImg'><img src='<?php echo $donnees['Photo'];?>'alt'<?php echo $donnees['Id_I'];?>'></div></div></div>";
          //Chaque marker est indentifié par marker+Id_I
          var marker<?php echo $donnees['Id_I'];?> = new google.maps.Marker({
            position: markerLatLng,
            map: map,
            icon: markerOFF
          });

          //Ajout du marker dans le tableau
          tabMarker.push(marker<?php echo $donnees['Id_I'];?>);

          //Au click sur un marker on affiche son contenu 
          google.maps.event.addListener(marker<?php echo $donnees['Id_I'];?>, 'click', function() {
            document.getElementById('description').innerHTML = contentString<?php echo "<div class='span7'>"+$donnees['Id_I']+"</div>";?>;
            marker<?php echo $donnees['Id_I'];?>.setIcon(markerON);
            //Boucle qui parcourt tous les markers du tableau et qui met l'image OFF a tous les markers autres que celui cliqué
            //Pour n'avoir qu'un seul marker ON
            for (var i = 0; i<tabMarker.length; i ++){
              if (tabMarker[i] != marker<?php echo $donnees['Id_I'];?>){
                tabMarker[i].setIcon(markerOFF);
              }
            }    
          });

        <?php   
          }
        ?>
      }
      google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body> 
    
    <div id="map-container">
      <div id="map-canvas"></div>
    </div>

 
      <div id="description"></div>
  </body>
</html>