<?php
	require_once("datas/parametres.php");
	$req0 = $PDO->prepare('SELECT `choix1`, `choix2` FROM `etape` WHERE `Id_E` IN (SELECT MAX(`Id_E`) FROM `etape`) ');
	$req0->execute();
	$resultat0 = $req0->fetchAll(PDO::FETCH_ASSOC);
	foreach ($resultat0 as $donnees) {
		$choix1 = $donnees['choix1'];
		$choix2 = $donnees['choix2'];
	}
	// !!!!! ATTENTION IL FAUDRA CHANGER L'ID !!!!!!!
	$id=5;



?>
<html>
	<head>
	</head>

	<body>
		<p>vote choix 1: <?php echo $choix1; ?></<p>
		<form action="script/vote-choix1.php" method="POST">
			<input type="hidden" id="id_etape" name="id_etape" value="<?php echo $id;?>">
			<input type="hidden" id="score" name="score" value="<?php echo $choix1;?>">
			<button type="submit">Choix 1</button>
		</form>
		<p>vote choix 2: <?php echo $choix2; ?></<p>
		<form action="script/vote-choix2.php" method="POST">
			<input type="hidden" id="id_etape" name="id_etape" value="<?php echo $id;?>">
			<input type="hidden" id="score" name="score" value="<?php echo $choix2;?>">
			<button type="submit">Choix 2</button>
		</form>
	</body>	
</html>