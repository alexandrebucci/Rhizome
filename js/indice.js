$(document).ready(function(){
	console.log("document chargé");
	$('#photo_btn').click(function(){
		console.log("bouton photo");
		$('#photo').removeClass('OFF').addClass('ON');
		$('#map').removeClass('ON').addClass('OFF');
		$('#article').removeClass('ON').addClass('OFF');
		$('#lien').removeClass('ON').addClass('OFF');

		return false;
	});

	$('#map_btn').click(function(){
		console.log("bouton map");
		$('#photo').removeClass('ON').addClass('OFF');
		$('#map').removeClass('OFF').addClass('ON');
		$('#article').removeClass('ON').addClass('OFF');
		$('#lien').removeClass('ON').addClass('OFF');
		return false;
	});

	$('#article_btn').click(function(){
		console.log("bouton article");
		$('#photo').removeClass('ON').addClass('OFF');
		$('#map').removeClass('ON').addClass('OFF');
		$('#article').removeClass('OFF').addClass('ON');
		$('#lien').removeClass('ON').addClass('OFF');
		return false;
	});

	$('#lien_btn').click(function(){
		console.log("bouton lien");
		$('#photo').removeClass('ON').addClass('OFF');
		$('#map').removeClass('ON').addClass('OFF');
		$('#article').removeClass('ON').addClass('OFF');
		$('#lien').removeClass('OFF').addClass('ON');
		return false;
	});
});