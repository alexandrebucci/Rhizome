<?php 
/**
 * Récupérer la véritable adresse IP d'un visiteur
 */
function get_ip() {
	// IP si internet partagé
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		return $_SERVER['HTTP_CLIENT_IP'];
	}
	// IP derrière un proxy
	elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	// Sinon : IP normale
	else {
		return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
	}
}

	echo 'Bonjour ceci est votre IP : '. $_SERVER['REMOTE_ADDR'] .'<br />'; 
	echo 'l\'addresse IP du server et : '. $_SERVER['SERVER_ADDR'] .'<br /><br />'; 

	// Afficher l'adresse IP
	echo 'Adresse IP du visiteur : '.get_ip();
?>