<?php
session_start();
	if (!isset ($_SESSION['connecte']))
		header("location: utils/formulaire.html");
	if ($_SESSION['connecte']!=1)
		header("location: utils/formulaire.html");	
?>