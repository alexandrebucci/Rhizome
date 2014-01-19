<?php
	require_once("datas/parametres.php");
	$req0 = $PDO->prepare('SELECT `vote` FROM `etape` WHERE `Id_E` IN (SELECT MAX(`Id_E`) FROM `etape`) ');
	$req0->execute();
	$resultat0 = $req0->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
	<head>
	</head>

	<body>

	</body>	
</html>