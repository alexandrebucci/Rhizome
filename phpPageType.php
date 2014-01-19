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
		<div id='photo'class="ON">
			<?php 			
				$reqP = $PDO->prepare('SELECT * FROM `indice` WHERE `Type`= "Photo" AND `Id_E` = :idE');
				$reqP->execute(Array(
					":idE" => $idE
				));
	      		$resultatP = $reqP->fetchAll(PDO::FETCH_ASSOC);
	      		foreach ($resultatP as $donnees) {
		    ?>
		    <div class="span3">
                <div class="rogneImg">
                	<a class="fancybox" href="<?php echo $donnees['Photo']; ?>" data-fancybox-group="gallery" title="titre <?php echo $donnees['Id_I']; ?>"><img src="<?php echo $donnees['Photo']; ?>" alt="<?php echo $donnees['Id_I']; ?>"/></a>
                    <p>
	                    <?php
	                    	$date = $donnees['Date'];
							setlocale (LC_TIME, 'fr-FR', 'fra'); 
							//$formatDate = date("d/m/Y", strtotime($date));Date format 20/04/2013
							$formatDate = utf8_encode(strftime("d/m/Y", strtotime($date)));
							echo $formatDate;
						?>
					</p>
                    <a href="#">Flickr</a>
                </div>                
            </div>
		    <?php
		    	}
			?>
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
			<?php 
				$reqA = $PDO->prepare('SELECT * FROM `indice` WHERE `Type`= "Article" AND `Id_E` = :idE');
				$reqA->execute(Array(
					":idE" => $idE
				));
			   $resultatA = $reqA->fetchAll(PDO::FETCH_ASSOC);
			   foreach ($resultatA as $donnees) {
			?>

			<div>
				<a class="fancybox" href="<?php echo $donnees['Photo']; ?>" data-fancybox-group="gallery" title="titre <?php echo $donnees['Id_I']; ?>"><img src="<?php echo $donnees['Photo']; ?>" alt="<?php echo $donnees['Id_I']; ?>"/></a>
		       	<p>Titre : <?php $donnees['Titre']; ?></p>
		       	<p>
				   	<?php
			            $date = $donnees['Date'];
						setlocale (LC_TIME, 'fr-FR', 'fra'); 
						//$formatDate = date("d/m/Y", strtotime($date));Date format 20/04/2013
						$formatDate = utf8_encode(strftime("d/m/Y", strtotime($date)));
						echo $formatDate;
					?>
				</p>
			</div>
		  	<?php
	    		}
			?>
		</div>

		<div id='lien'class="OFF">
			<?php 
				$reqL = $PDO->prepare('SELECT * FROM `indice` WHERE `Type`= "Lien" AND `Id_E` = :idE');
				$reqL->execute(Array(
					":idE" => $idE
				));
		     	$resultatL = $reqL->fetchAll(PDO::FETCH_ASSOC);
		      	foreach ($resultatL as $donnees) {
		    ?>

		    <div class="rogneImg">
                <p><?php echo $donnees['Titre']; ?></p>
                <a href="<?php $donnees['Url']; ?>">Source</a>
            </div>  
		 
		    <?php
		      }
			?>
		</div>
	</body>
</html>
