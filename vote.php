<?php
	require_once("datas/parametres.php");
	$req0 = $PDO->prepare('SELECT `vote` FROM `etape` WHERE `Id_E` IN (SELECT MAX(`Id_E`) FROM `etape`) ');
	$req0->execute();
	$resultat0 = $req0->fetchAll(PDO::FETCH_ASSOC);
	foreach ($resultat0 as $donnees) {
		$vote = $donnees['vote'];
	}

?>
<html>
	<head>
	</head>

	<body>
		<p>vote: <?php echo $vote; ?></<p>
		<form action="script/vote-positif.php" method="POST">
			<input type="hidden" value="<?php echo $vote;?>">
			<button type="submit">+</button>
		</form>

		<form action="script/vote-negatif.php" method="POST">
			<input type="hidden" value="<?php echo $vote;?>">
			<button type="submit">-</button>
		</form>
	</body>	
</html>