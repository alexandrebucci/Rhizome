<?php
	require_once("datas/parametres.php");
	if(isset($_GET['etape'])){
		$idE = $_GET['etape'];
	}
	else{
		$idE = 1;
	}
?>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/indice.css" type="text/css"/>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/indice.js"></script>

		<style type="text/css">
	      html { height: 100% }
	      body { height: 100%; margin: 0; padding: 0 }
	      #map{ position:relative; width:90%; height: 400px; margin: auto;}
	    </style>
	</head>

	<body>
		
		<div>
			<p id="photo_btn">photo</p>
			<p id="map_btn">map</p>
			<p id="article_btn">article</p>
			<p id="lien_btn">lien</p>

		</div>
		<div id='photo'class="ON">
			<p>
				<?php 
					
					$reqP = $PDO->prepare('SELECT * FROM `indice` WHERE `Type`= "Photo" AND `Id_E` = :idE');
					$reqP->execute(Array(
						":idE" => $idE
					));
		      $resultatP = $reqP->fetchAll(PDO::FETCH_ASSOC);
		      foreach ($resultatP as $donnees) {
		      	echo $donnees['Id_I'].'<br/>';
		      }
				?>
			</p>
		</div>

		<div id='map' class="OFF">
			<p>
				<?php 
					/*$reqM = $PDO->prepare('SELECT * FROM `indice` WHERE `Type`= "Plan" AND `Id_E` = :idE');
					$reqM->execute(Array(
						":idE" => $idE
					));
		      $resultatM = $reqM->fetchAll(PDO::FETCH_ASSOC);
		      foreach ($resultatM as $donnees) {
		      	echo $donnees['Id_I'].'<br/>';
		      }*/
		      	include_once("map.php");
				?>
			</p>
		</div>

		<div id='article'class="OFF">
			<p>
				<?php 
					$reqA = $PDO->prepare('SELECT * FROM `indice` WHERE `Type`= "Article" AND `Id_E` = :idE');
					$reqA->execute(Array(
						":idE" => $idE
					));
		      $resultatA = $reqA->fetchAll(PDO::FETCH_ASSOC);
		      foreach ($resultatA as $donnees) {
		      	echo $donnees['Id_I'].'<br/>';
		      }
				?>
			</p>
		</div>

		<div id='lien'class="OFF">
			<p>
				<?php 
					$reqL = $PDO->prepare('SELECT * FROM `indice` WHERE `Type`= "Lien" AND `Id_E` = :idE');
					$reqL->execute(Array(
						":idE" => $idE
					));
		      $resultatL = $reqL->fetchAll(PDO::FETCH_ASSOC);
		      foreach ($resultatL as $donnees) {
		      	echo $donnees['Id_I'].'<br/>';
		      }
				?>
			</p>
		</div>
	</body>
</html>
